<?php

/*
 * CKFinder
 * ========
 * https://ckeditor.com/ckfinder/
 * Copyright (c) 2007-2022, CKSource Holding sp. z o.o. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 */

namespace CKSource\CKFinder\Filesystem\Folder;

use CKSource\CKFinder\Backend\Backend;
use CKSource\CKFinder\CKFinder;
use CKSource\CKFinder\Exception\AccessDeniedException;
use CKSource\CKFinder\Exception\AlreadyExistsException;
use CKSource\CKFinder\Exception\FileNotFoundException;
use CKSource\CKFinder\Exception\FolderNotFoundException;
use CKSource\CKFinder\Exception\InvalidExtensionException;
use CKSource\CKFinder\Exception\InvalidNameException;
use CKSource\CKFinder\Exception\InvalidRequestException;
use CKSource\CKFinder\Filesystem\File\File;
use CKSource\CKFinder\Filesystem\Path;
use CKSource\CKFinder\Operation\OperationManager;
use CKSource\CKFinder\ResizedImage\ResizedImageRepository;
use CKSource\CKFinder\ResourceType\ResourceType;
use CKSource\CKFinder\Response\JsonResponse;
use CKSource\CKFinder\Thumbnail\ThumbnailRepository;
use CKSource\CKFinder\Utils;
use League\Flysystem\FilesystemException;
use League\MimeTypeDetection\MimeTypeDetector;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * The WorkingFolder class.
 *
 * Represents a working folder for the current request defined by
 * a resource type and a relative path.
 */
class WorkingFolder extends Folder implements EventSubscriberInterface
{
    /**
     * @var CKFinder
     */
    protected $app;

    /**
     * @var Backend
     */
    protected $backend;

    /**
     * @var ThumbnailRepository
     */
    protected $thumbnailRepository;

    /**
     * @var ResourceType
     */
    protected $resourceType;

    /**
     * Current folder path.
     *
     * @var string
     */
    protected $clientCurrentFolder;

    /**
     * Backend relative path (includes the backend directory prefix).
     *
     * @var string
     */
    protected $path;

    /**
     * Directory ACL mask computed for the current user.
     *
     * @var null|int
     */
    protected $aclMask;

    /**
     * Detects mime type.
     *
     * @var MimeTypeDetector
     */
    protected $detector;

    /**
     * Constructor.
     *
     * @throws \Exception
     * @throws FilesystemException
     */
    public function __construct(CKFinder $app, MimeTypeDetector $detector)
    {
        $this->app = $app;
        $this->detector = $detector;

        /** @var Request $request */
        $request = $app['request_stack']->getCurrentRequest();

        $resourceType = $app['resource_type_factory']->getResourceType((string) $request->get('type'));

        $this->clientCurrentFolder = Path::normalize(trim((string) $request->get('currentFolder')));

        if (!Path::isValid($this->clientCurrentFolder)) {
            throw new InvalidNameException('Invalid path');
        }

        $resourceTypeDirectory = $resourceType->getDirectory();

        parent::__construct($resourceType, $this->clientCurrentFolder);

        $this->backend = $this->resourceType->getBackend();
        $this->thumbnailRepository = $app['thumbnail_repository'];

        $backend = $this->getBackend();

        // Check if folder path is not hidden
        if ($backend->isHiddenPath($this->getClientCurrentFolder())) {
            throw new InvalidRequestException('Hidden folder path used');
        }

        // Check if resource type folder exists - if not then create it
        $currentCommand = (string) $request->query->get('command');
        $omitForCommands = ['Thumbnail'];

        if (!\in_array($currentCommand, $omitForCommands, true)
            && !empty($resourceTypeDirectory)
            && !$backend->hasDirectory($this->path)) {
            if ('/' === $this->clientCurrentFolder) {
                @$backend->createDirectory($resourceTypeDirectory);
                if (!$backend->hasDirectory($resourceTypeDirectory)) {
                    throw new AccessDeniedException("Couldn't create resource type directory. Please check permissions.");
                }
            } else {
                throw new FolderNotFoundException();
            }
        }
    }

    /**
     * Returns the ResourceType object for the current working folder.
     */
    public function getResourceType(): ResourceType
    {
        return $this->resourceType;
    }

    /**
     * Returns the name of the current resource type.
     */
    public function getResourceTypeName(): string
    {
        return $this->resourceType->getName();
    }

    /**
     * Returns the client current folder path.
     */
    public function getClientCurrentFolder(): string
    {
        return $this->clientCurrentFolder;
    }

    /**
     * Returns the backend relative path with the resource type directory prefix.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Returns the backend assigned for the current resource type.
     */
    public function getBackend(): Backend
    {
        return $this->resourceType->getBackend();
    }

    /**
     * Returns the thumbnails repository object.
     */
    public function getThumbnailsRepository(): ThumbnailRepository
    {
        return $this->thumbnailRepository;
    }

    /**
     * Lists directories in the current working folder.
     *
     * @return array list of directories
     */
    public function listDirectories(): array
    {
        return $this->getBackend()->directories($this->getResourceType(), $this->getClientCurrentFolder());
    }

    /**
     * Lists files in the current working folder.
     *
     * @return array list of files
     */
    public function listFiles(): array
    {
        return $this->getBackend()->files($this->getResourceType(), $this->getClientCurrentFolder());
    }

    /**
     * Returns ACL mask computed for the current user and the current working folder.
     */
    public function getAclMask(): ?int
    {
        if (null === $this->aclMask) {
            $this->aclMask = $this->app->getAcl()->getComputedMask($this->getResourceTypeName(), $this->getClientCurrentFolder());
        }

        return $this->aclMask;
    }

    /**
     * Creates a directory with a given name in the working folder.
     *
     * @param string $dirname directory name
     *
     * @return array [string, bool] [0] Created folder name, [1] `true` if the folder was created successfully
     *
     * @throws AlreadyExistsException
     * @throws InvalidNameException
     * @throws AccessDeniedException
     * @throws FilesystemException
     */
    public function createDirectory(string $dirname): array
    {
        $config = $this->app['config'];

        $backend = $this->getBackend();

        if (!Folder::isValidName($dirname, $config->get('disallowUnsafeCharacters')) || $backend->isHiddenFolder($dirname)) {
            throw new InvalidNameException('Invalid folder name');
        }

        if ($config->get('forceAscii')) {
            $dirname = File::convertToAscii($dirname);
        }

        $dirPath = Path::combine('/', $this->getPath(), $dirname, '/');

        if ($backend->hasDirectory($dirPath)) {
            throw new AlreadyExistsException('Folder already exists');
        }

        $backend->createDirectory($dirPath);
        $result = true;
        if (!$backend->hasDirectory($dirPath)) {
            $result = false;
        }

        return [$dirname, $result];
    }

    /**
     * Creates a file inside the current working folder.
     *
     * @param string $fileName file name
     * @param string $data     file data
     *
     * @return bool `true` if created successfully
     */
    public function write($fileName, $data): bool
    {
        $backend = $this->getBackend();
        $filePath = Path::combine($this->getPath(), $fileName);

        try {
            $backend->write($filePath, $data);
        } catch (FilesystemException $e) {
            throw new FileException("Couldn't create file.");
        }

        return true;
    }

    /**
     * Creates a file inside the current working folder using the stream.
     *
     * @param string   $fileName file name
     * @param resource $resource file data stream
     *
     * @return bool `true` if created successfully
     */
    public function writeStream($fileName, $resource): bool
    {
        $backend = $this->getBackend();
        $filePath = Path::combine($this->getPath(), $fileName);

        try {
            $backend->writeStream($filePath, $resource);
        } catch (FilesystemException $e) {
            return false;
        }

        return true;
    }

    /**
     * Creates or updates a file inside the current working folder using the stream.
     *
     * @param string   $fileName file name
     * @param resource $resource file data stream
     * @param string   $mimeType file MIME type
     *
     * @return bool `true` if updated successfully
     */
    public function putStream($fileName, $resource, $mimeType = null): bool
    {
        $backend = $this->getBackend();
        $filePath = Path::combine($this->getPath(), $fileName);

        if (!$mimeType) {
            $mimeType = $this->detector->detectMimeTypeFromFile($filePath);
        }

        $options = $mimeType ? ['mimetype' => $mimeType] : [];

        try {
            $backend->writeStream($filePath, $resource, $options);
        } catch (FilesystemException $e) {
            return false;
        }

        return true;
    }

    /**
     * Checks if the current working folder contains a file with a given name.
     *
     * @throws FilesystemException
     */
    public function containsFile(string $fileName): bool
    {
        $backend = $this->getBackend();

        if (!File::isValidName($fileName, $this->app['config']->get('disallowUnsafeCharacters'))
            || $backend->isHiddenFolder($this->getClientCurrentFolder())
            || $backend->isHiddenFile($fileName)
            || !$this->resourceType->isAllowedExtension(pathinfo($fileName, PATHINFO_EXTENSION))) {
            return false;
        }

        $filePath = Path::combine($this->getPath(), $fileName);

        return $backend->has($filePath);
    }

    /**
     * Returns contents of the file with a given name.
     *
     * @throws FilesystemException
     */
    public function read(string $fileName): string
    {
        $backend = $this->getBackend();
        $filePath = Path::combine($this->getPath(), $fileName);

        return $backend->read($filePath);
    }

    /**
     * Returns contents stream of the file with a given name.
     *
     * @return resource
     *
     * @throws FilesystemException
     * @throws \League\Flysystem\FileNotFoundException
     */
    public function readStream(string $fileName)
    {
        $backend = $this->getBackend();
        $filePath = Path::combine($this->getPath(), $fileName);

        return $backend->readStream($filePath);
    }

    /**
     * Deletes the current working folder.
     *
     * @return bool `true` if the deletion was successful
     */
    public function delete()
    {
        // Delete related thumbs path
        $this->thumbnailRepository->deleteThumbnails($this->resourceType, $this->getClientCurrentFolder());

        $this->app['cache']->deleteByPrefix(Path::combine($this->resourceType->getName(), $this->getClientCurrentFolder()));

        try {
            $this->getBackend()->deleteDirectory($this->getPath());
        } catch (FilesystemException $e) {
            return false;
        }

        return true;
    }

    /**
     * Renames the current working folder.
     *
     * @param string $newName new folder name
     *
     * @return array containing newName and newPath
     *
     * @throws AlreadyExistsException
     * @throws InvalidNameException
     * @throws AccessDeniedException
     * @throws FilesystemException
     */
    public function rename(string $newName): array
    {
        $config = $this->app['config'];
        $disallowUnsafeCharacters = $config->get('disallowUnsafeCharacters');
        $forceAscii = $config->get('forceAscii');

        if (!Folder::isValidName($newName, $disallowUnsafeCharacters) || $this->backend->isHiddenFolder($newName)) {
            throw new InvalidNameException('Invalid folder name');
        }

        if ($forceAscii) {
            $newName = File::convertToAscii($newName);
        }

        $newBackendPath = \dirname($this->getPath()).'/'.$newName;

        if ($this->backend->has($newBackendPath)) {
            throw new AlreadyExistsException('File already exists');
        }

        $newClientPath = Path::normalize(\dirname($this->getClientCurrentFolder()).'/'.$newName);

        if (!$this->getBackend()->rename($this->getPath(), $newBackendPath)) {
            throw new AccessDeniedException();
        }

        /** @var OperationManager $currentRequestOperation */
        $currentRequestOperation = $this->app['operation'];

        if ($currentRequestOperation->isAborted()) {
            // Don't continue in this case, no need to touch thumbs and cache entries
            return ['aborted' => true];
        }

        // Delete related thumbs path
        $this->thumbnailRepository->deleteThumbnails($this->resourceType, $this->getClientCurrentFolder());

        $this->app['cache']->changePrefix(
            Path::combine($this->resourceType->getName(), $this->getClientCurrentFolder()),
            Path::combine($this->resourceType->getName(), $newClientPath)
        );

        return [
            'newName' => $newName,
            'newPath' => $newClientPath,
            'renamed' => 1,
        ];
    }

    /**
     * Returns the URL to a given file.
     *
     * @throws InvalidExtensionException
     * @throws InvalidRequestException
     * @throws FileNotFoundException
     * @throws FilesystemException
     */
    public function getFileUrl(string $fileName, string $thumbnailFileName = null): ?string
    {
        $config = $this->app['config'];

        if (!File::isValidName($fileName, $config->get('disallowUnsafeCharacters'))) {
            throw new InvalidRequestException('Invalid file name');
        }

        if ($thumbnailFileName) {
            if (!File::isValidName($thumbnailFileName, $config->get('disallowUnsafeCharacters'))) {
                throw new InvalidRequestException('Invalid thumbnail file name');
            }

            if (!$this->resourceType->isAllowedExtension(pathinfo($thumbnailFileName, PATHINFO_EXTENSION))) {
                throw new InvalidExtensionException('Invalid thumbnail file name');
            }
        }

        if (!$this->containsFile($fileName)) {
            throw new FileNotFoundException();
        }

        return $this->backend->getFileUrl($this->resourceType, $this->getClientCurrentFolder(), $fileName, $thumbnailFileName);
    }

    public function getResizedImageRepository(): ResizedImageRepository
    {
        return $this->app['resized_image_repository'];
    }

    /**
     * Tells the current WorkingFolder object to not add the current folder
     * to the response.
     *
     * By default the WorkingFolder object acts as an event subscriber and
     * listens for the `KernelEvents::RESPONSE` event. The response given is
     * then modified by adding information about the current folder.
     *
     * @see WorkingFolder::addCurrentFolderInfo()
     */
    public function omitResponseInfo()
    {
        $this->app['dispatcher']->removeSubscriber($this);
    }

    /**
     * Adds the current folder information to the response.
     */
    public function addCurrentFolderInfo(ResponseEvent $event)
    {
        /** @var JsonResponse $response */
        $response = $event->getResponse();

        if ($response instanceof JsonResponse) {
            $responseData = (array) $response->getData();

            $responseData = [
                'resourceType' => $this->getResourceTypeName(),
                'currentFolder' => [
                    'path' => $this->getClientCurrentFolder(),
                    'acl' => $this->getAclMask(),
                ],
            ] + $responseData;

            $baseUrl = $this->backend->getBaseUrl();

            if (null !== $baseUrl) {
                $folderUrl = Path::combine($baseUrl, Utils::encodeURLParts(Path::combine($this->resourceType->getDirectory(), $this->getClientCurrentFolder())));
                $responseData['currentFolder']['url'] = rtrim($folderUrl, '/').'/';
            }

            $response->setData($responseData);
        }
    }

    /**
     * Returns listeners for the event dispatcher.
     *
     * @return array subscribed events
     */
    public static function getSubscribedEvents(): array
    {
        return [KernelEvents::RESPONSE => ['addCurrentFolderInfo', 512]];
    }
}
