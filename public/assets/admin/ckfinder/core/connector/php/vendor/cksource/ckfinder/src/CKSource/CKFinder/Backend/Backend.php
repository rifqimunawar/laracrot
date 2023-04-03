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

namespace CKSource\CKFinder\Backend;

use CKSource\CKFinder\Acl\AclInterface;
use CKSource\CKFinder\Acl\Permission;
use CKSource\CKFinder\Backend\Adapter\EmulateRenameDirectoryInterface;
use CKSource\CKFinder\CKFinder;
use CKSource\CKFinder\Config as CKFinderConfig;
use CKSource\CKFinder\Exception\AccessDeniedException;
use CKSource\CKFinder\Filesystem\Path;
use CKSource\CKFinder\ResizedImage\ResizedImage;
use CKSource\CKFinder\ResourceType\ResourceType;
use CKSource\CKFinder\Utils;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemAdapter;
use League\Flysystem\FilesystemException;
use League\Flysystem\Ftp\FtpAdapter;

/**
 * The Backend file system class.
 *
 * A wrapper class for League\Flysystem\Filesystem with
 * CKFinder customizations.
 */
class Backend extends Filesystem
{
    /**
     * The CKFinder application container.
     *
     * @var CKFinder
     */
    protected $app;

    /**
     * Access Control Lists.
     *
     * @var AclInterface
     */
    protected $acl;

    /**
     * Configuration.
     *
     * @var CKFinderConfig
     */
    protected $ckConfig;

    /**
     * Backend configuration array.
     */
    protected $backendConfig;

    /**
     * Filesystem adapter.
     */
    protected $adapter;

    /**
     * Constructor.
     *
     * @param array             $backendConfig    the backend configuration node
     * @param CKFinder          $app              the CKFinder app container
     * @param FilesystemAdapter $adapter          the adapter
     * @param array             $filesystemConfig the configuration
     */
    public function __construct(array $backendConfig, CKFinder $app, FilesystemAdapter $adapter, array $filesystemConfig = [])
    {
        $this->app = $app;
        $this->backendConfig = $backendConfig;
        $this->acl = $app['acl'];
        $this->ckConfig = $app['config'];
        $this->adapter = $adapter;

        parent::__construct($adapter, $filesystemConfig);
    }

    /**
     * Returns the name of the backend.
     *
     * @return string name of the backend
     */
    public function getName()
    {
        return $this->backendConfig['name'];
    }

    /**
     * Returns an array of commands that should use operation tracking.
     */
    public function getTrackedOperations(): array
    {
        return isset($this->backendConfig['trackedOperations']) ? $this->backendConfig['trackedOperations'] : [];
    }

    /**
     * Returns a path based on the resource type and the resource type relative path.
     *
     * @param ResourceType $resourceType the resource type
     * @param string       $path         the resource type relative path
     *
     * @return string path to be used with the backend adapter
     */
    public function buildPath(ResourceType $resourceType, string $path): string
    {
        return Path::combine($resourceType->getDirectory(), $path);
    }

    /**
     * Returns a filtered list of directories for a given resource type and path.
     *
     * @throws FilesystemException
     */
    public function directories(ResourceType $resourceType, string $path = '', bool $recursive = false): array
    {
        $directoryPath = $this->buildPath($resourceType, $path);
        $contents = $this->listContents($directoryPath, $recursive)->toArray();

        $acl = [];

        foreach ($contents as &$entry) {
            $basename = pathinfo($entry['path'], PATHINFO_BASENAME);
            $acl[$basename] = $this->acl->getComputedMask($resourceType->getName(), Path::combine($path, $basename));
        }

        $contentsFiltered = array_filter($contents, function ($v) use ($acl) {
            $basename = pathinfo($v['path'], PATHINFO_BASENAME);

            return isset($v['type'])
                && 'dir' === $v['type']
                && !$this->isHiddenFolder($basename)
                && $acl[$basename] & Permission::FOLDER_VIEW;
        });

        $outputArray = [];
        $i = 0;
        foreach ($contentsFiltered as $directory) {
            $basename = pathinfo($directory['path'], PATHINFO_BASENAME);
            $element = [];
            $element['directory'] = $directory;
            $element['acl'] = $acl[$basename];
            $outputArray[$i] = $element;
            ++$i;
        }

        return $outputArray;
    }

    /**
     * Returns a filtered list of files for a given resource type and path.
     *
     * @throws FilesystemException
     */
    public function files(ResourceType $resourceType, string $path = '', bool $recursive = false): array
    {
        $directoryPath = $this->buildPath($resourceType, $path);
        $contents = $this->listContents($directoryPath, $recursive);

        return array_filter($contents->toArray(), function ($v) use ($resourceType) {
            $pathParts = pathinfo($v['path']);

            return isset($v['type'])
                   && 'file' === $v['type']
                   && !$this->isHiddenFile($pathParts['basename'])
                   && $resourceType->isAllowedExtension($pathParts['extension'] ?? '');
        });
    }

    /**
     * Check if the directory for a given path contains subdirectories.
     *
     * @return bool `true` if the directory contains subdirectories
     *
     * @throws FilesystemException
     */
    public function containsDirectories(ResourceType $resourceType, string $path = ''): bool
    {
        $baseAdapter = $this->getBaseAdapter();
        if (method_exists($baseAdapter, 'containsDirectories')) {
            return $baseAdapter->containsDirectories($this, $resourceType, $path, $this->acl);
        }

        $directoryPath = $this->buildPath($resourceType, $path);

        // It's possible that directory may not exist yet. This is the case when very first Init command
        // is received, and resource type directories were not created yet. Some adapters will throw in
        // this case, so handle this gracefully.
        try {
            $contents = $this->listContents($directoryPath);
        } catch (\Exception $e) {
            return false;
        }

        foreach ($contents as $entry) {
            $basename = pathinfo($entry['path'], PATHINFO_BASENAME);
            if ('dir' === $entry['type']
                && !$this->isHiddenFolder($basename)
                && $this->acl->isAllowed($resourceType->getName(), Path::combine($path, $basename), Permission::FOLDER_VIEW)
            ) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if the file with a given name is hidden.
     *
     * @param string $fileName
     *
     * @return bool `true` if the file is hidden
     */
    public function isHiddenFile($fileName): bool
    {
        $hideFilesRegex = $this->ckConfig->getHideFilesRegex();

        if ($hideFilesRegex) {
            return (bool) preg_match($hideFilesRegex, $fileName);
        }

        return false;
    }

    /**
     * Checks if the directory with a given name is hidden.
     *
     * @param string $folderName
     *
     * @return bool `true` if the directory is hidden
     */
    public function isHiddenFolder($folderName): bool
    {
        $hideFoldersRegex = $this->ckConfig->getHideFoldersRegex();

        if ($hideFoldersRegex) {
            return (bool) preg_match($hideFoldersRegex, $folderName);
        }

        return false;
    }

    /**
     * Checks if the path is hidden.
     *
     * @param string $path
     *
     * @return bool `true` if the path is hidden
     */
    public function isHiddenPath($path): bool
    {
        $pathParts = explode('/', trim($path, '/'));
        if ($pathParts) {
            foreach ($pathParts as $part) {
                if ($this->isHiddenFolder($part)) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Deletes a directory.
     *
     * @throws FilesystemException
     */
    public function deleteDirectory(string $dirname): void
    {
        $baseAdapter = $this->getBaseAdapter();

        // For FTP first remove recursively all directory contents
        if ($baseAdapter instanceof FtpAdapter) {
            $this->deleteContents($dirname);
        }

        parent::deleteDirectory($dirname);
    }

    /**
     * Delete all contents of the given directory.
     *
     * @param string $dirname
     *
     * @throws FilesystemException
     */
    public function deleteContents($dirname)
    {
        $contents = $this->listContents($dirname);

        foreach ($contents as $entry) {
            if ('dir' === $entry['type']) {
                $this->deleteContents($entry['path']);
                $this->deleteDirectory($entry['path']);
            } else {
                $this->delete($entry['path']);
            }
        }
    }

    /**
     * Checks if a backend contains a directory.
     *
     * The Backend::has() method is not always reliable and may
     * work differently for various adapters. Checking for directory
     * should be done with this method.
     */
    public function hasDirectory(string $directoryPath): bool
    {
        $pathParts = array_filter(explode('/', $directoryPath), 'strlen');
        $dirName = array_pop($pathParts);

        try {
            $contents = $this->listContents(implode('/', $pathParts))->toArray();
        } catch (\Exception $e) {
            return false;
        }

        foreach ($contents as $c) {
            $pathParts = pathinfo($c['path']);
            if (isset($c['type'], $pathParts['basename']) && 'dir' === $c['type'] && $pathParts['basename'] === $dirName) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns a URL to a file.
     *
     * If the useProxyCommand option is set for a backend, the returned
     * URL will point to the CKFinder connector Proxy command.
     *
     * @param ResourceType $resourceType      the file resource type
     * @param string       $folderPath        the resource-type relative folder path
     * @param string       $fileName          the file name
     * @param null|string  $thumbnailFileName the thumbnail file name - if the file is a thumbnail
     *
     * @return null|string URL to a file or `null` if the backend does not support it
     */
    public function getFileUrl(
        ResourceType $resourceType,
        string $folderPath,
        string $fileName,
        string $thumbnailFileName = null
    ): ?string {
        if ($this->usesProxyCommand()) {
            $connectorUrl = $this->app->getConnectorUrl();

            $queryParameters = [
                'command' => 'Proxy',
                'type' => $resourceType->getName(),
                'currentFolder' => $folderPath,
                'fileName' => $fileName,
            ];

            if ($thumbnailFileName) {
                $queryParameters['thumbnail'] = $thumbnailFileName;
            }

            $proxyCacheLifetime = (int) $this->ckConfig->get('cache.proxyCommand');

            if ($proxyCacheLifetime > 0) {
                $queryParameters['cache'] = $proxyCacheLifetime;
            }

            return $connectorUrl.'?'.http_build_query($queryParameters, '', '&');
        }

        $path = $thumbnailFileName
            ? Path::combine($resourceType->getDirectory(), $folderPath, ResizedImage::DIR, $fileName, $thumbnailFileName)
            : Path::combine($resourceType->getDirectory(), $folderPath, $fileName);

        if (isset($this->backendConfig['baseUrl'])) {
            return Path::combine($this->backendConfig['baseUrl'], Utils::encodeURLParts($path));
        }

        $baseAdapter = $this->getBaseAdapter();

        if (method_exists($baseAdapter, 'getFileUrl')) {
            return $baseAdapter->getFileUrl($path);
        }

        return null;
    }

    /**
     * Returns the base URL used to build the direct URL to files stored
     * in this backend.
     *
     * @return null|string base URL or `null` if the base URL for a backend
     *                     was not defined
     */
    public function getBaseUrl(): ?string
    {
        if (isset($this->backendConfig['baseUrl']) && !$this->usesProxyCommand()) {
            return $this->backendConfig['baseUrl'];
        }

        return null;
    }

    /**
     * Returns the root directory defined for the backend.
     *
     * @return null|string root directory or `null` if the root directory
     *                     was not defined
     */
    public function getRootDirectory(): ?string
    {
        if (isset($this->backendConfig['root'])) {
            return $this->backendConfig['root'];
        }

        return null;
    }

    /**
     * Returns a Boolean value telling if the backend uses the Proxy command.
     */
    public function usesProxyCommand(): bool
    {
        return isset($this->backendConfig['useProxyCommand']) && $this->backendConfig['useProxyCommand'];
    }

    /**
     * Creates a stream for writing.
     *
     * @param string $path file path
     *
     * @return null|resource a stream to a file or `null` if the backend does not
     *                       support writing streams
     */
    public function createWriteStream(string $path)
    {
        $baseAdapter = $this->getBaseAdapter();

        if (method_exists($baseAdapter, 'createWriteStream')) {
            return $baseAdapter->createWriteStream($path);
        }

        return null;
    }

    /**
     * Renames the object for a given path.
     *
     * @param mixed $path
     * @param mixed $newPath
     *
     * @return null|bool `true` on success, `false` on failure
     *
     * @throws AccessDeniedException
     */
    public function rename($path, $newPath): ?bool
    {
        $baseAdapter = $this->getBaseAdapter();

        if (($baseAdapter instanceof EmulateRenameDirectoryInterface) && $this->hasDirectory($path)) {
            return $baseAdapter->renameDirectory($path, $newPath);
        }

        try {
            parent::move($path, $newPath);
        } catch (FilesystemException $e) {
            return false;
        }

        return true;
    }

    /**
     * Returns a base adapter used by this backend.
     */
    public function getBaseAdapter(): FilesystemAdapter
    {
        return $this->adapter;
    }
}
