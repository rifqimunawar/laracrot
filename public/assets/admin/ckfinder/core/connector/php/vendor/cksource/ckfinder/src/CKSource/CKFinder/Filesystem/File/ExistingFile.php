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

namespace CKSource\CKFinder\Filesystem\File;

use CKSource\CKFinder\Backend\Backend;
use CKSource\CKFinder\CKFinder;
use CKSource\CKFinder\Error;
use CKSource\CKFinder\Exception\InvalidUploadException;
use CKSource\CKFinder\Filesystem\Path;
use CKSource\CKFinder\Image;
use CKSource\CKFinder\ResourceType\ResourceType;
use League\Flysystem\FilesystemException;

/**
 * The ExistingFile class.
 *
 * Represents a file that already exists in CKFinder and can be
 * pointed using the resource type, path and file name.
 */
abstract class ExistingFile extends File
{
    /**
     * File resource type.
     *
     * @var ResourceType
     */
    protected $resourceType;

    /**
     * Resource type relative folder.
     *
     * @var string
     */
    protected $folder;

    /**
     * Array for errors that may occur during file processing.
     *
     * @var array
     */
    protected $errors = [];

    /**
     * File metadata.
     *
     * @var array
     */
    protected $metadata;

    /**
     * Backed used by resource type.
     *
     * @var Backend
     */
    protected $backend;

    /**
     * Constructor.
     *
     * @param string $fileName
     * @param string $folder
     */
    public function __construct($fileName, $folder, ResourceType $resourceType, CKFinder $app)
    {
        $this->folder = $folder;
        $this->resourceType = $resourceType;
        $this->backend = $this->resourceType->getBackend();

        parent::__construct($fileName, $app);
    }

    /**
     * Returns backend-relative folder path (i.e. a path with a prepended resource type directory).
     *
     * @return string backend-relative path
     */
    public function getPath(): string
    {
        return Path::combine($this->resourceType->getDirectory(), $this->folder);
    }

    /**
     * Returns backend-relative file path.
     *
     * @return string file path
     */
    public function getFilePath(): string
    {
        return Path::combine($this->getPath(), $this->getFilename());
    }

    /**
     * Checks if the current file folder path is valid.
     *
     * @return bool `true` if the path is valid
     */
    public function hasValidPath(): bool
    {
        return Path::isValid($this->getPath());
    }

    /**
     * Returns the resource type of the file.
     */
    public function getResourceType(): ResourceType
    {
        return $this->resourceType;
    }

    /**
     * Checks if the current file has an extension allowed in its resource type.
     *
     * @return bool `true` if the file has an allowed exception
     */
    public function hasAllowedExtension(): bool
    {
        $extension = $this->getExtension();

        return $this->resourceType->isAllowedExtension($extension);
    }

    /**
     * Checks if the current file is hidden.
     *
     * @return bool `true` if the file is hidden
     */
    public function isHidden(): bool
    {
        return $this->backend->isHiddenFile($this->getFilename());
    }

    /**
     * Checks if the current file has a hidden path (i.e. if any of the parent folders is hidden).
     *
     * @return bool `true` if the path is hidden
     */
    public function hasHiddenPath(): bool
    {
        return $this->backend->isHiddenPath($this->getPath());
    }

    /**
     * Checks if the current file exists.
     *
     * @return bool `true` if the file exists
     *
     * @throws FilesystemException
     */
    public function exists(): bool
    {
        $filePath = $this->getFilePath();

        if ($this->backend->hasDirectory($filePath)) {
            return false;
        }

        return $this->backend->fileExists($filePath);
    }

    /**
     * Returns file contents stream.
     *
     * @return resource contents stream
     */
    public function getContentsStream()
    {
        $filePath = $this->getFilePath();

        return $this->backend->readStream($filePath);
    }

    /**
     * Returns file contents.
     *
     * @return string contents stream
     *
     * @throws FilesystemException
     */
    public function getContents(): string
    {
        $filePath = $this->getFilePath();

        return $this->backend->read($filePath);
    }

    /**
     * Sets new file contents.
     *
     * @param string $contents file contents
     * @param string $filePath path to save the file
     *
     * @return bool `true` if saved successfully
     *
     * @throws \Exception if content size is too big
     */
    public function save($contents, $filePath = null): bool
    {
        $filePath = $filePath ?: $this->getFilePath();

        $maxSize = $this->resourceType->getMaxSize();

        $contentsSize = \strlen($contents);

        if ($maxSize && $contentsSize > $maxSize) {
            throw new InvalidUploadException('New file contents is too big for resource type limit', Error::UPLOADED_TOO_BIG);
        }

        try {
            $this->resourceType->getBackend()->write($filePath, $contents);
        } catch (FilesystemException $e) {
            return false;
        }

        $this->deleteThumbnails();

        return true;
    }

    /**
     * Adds an error to the array of errors of the current file.
     *
     * @param int $number error number
     *
     * @see Error
     */
    public function addError(int $number)
    {
        $this->errors[] = [
            'number' => $number,
            'name' => $this->getFilename(),
            'type' => $this->resourceType->getName(),
            'folder' => $this->folder,
        ];
    }

    /**
     * Returns an array of errors that occurred during file processing.
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Removes the thumbnail generated for the current file.
     *
     * @return bool `true` if the thumbnail was found and deleted
     *
     * @throws FilesystemException
     */
    public function deleteThumbnails(): bool
    {
        $extension = $this->getExtension();

        if (Image::isSupportedExtension($extension) || ('bmp' === $extension && $this->config->get('thumbnails.bmpSupported'))) {
            $thumbsRepository = $this->resourceType->getThumbnailRepository();

            return $thumbsRepository->deleteThumbnails($this->resourceType, $this->folder, $this->getFilename());
        }

        return false;
    }

    /**
     * Removes resized images generated for the current file.
     *
     * @return bool `true` if resized images were found and deleted
     */
    public function deleteResizedImages(): bool
    {
        $extension = $this->getExtension();

        if (Image::isSupportedExtension($extension)) {
            $resizedImageRepository = $this->resourceType->getResizedImageRepository();

            return $resizedImageRepository->deleteResizedImages($this->resourceType, $this->folder, $this->getFilename());
        }

        return false;
    }

    /**
     * Returns last modification time.
     *
     * @return int Unix timestamp
     *
     * @throws FilesystemException
     */
    public function getTimestamp(): int
    {
        return $this->backend->lastModified($this->getFilePath());
    }

    /**
     * Returns file MIME type.
     *
     * @return string file MIME type
     *
     * @throws FilesystemException
     */
    public function getMimeType(): string
    {
        return $this->backend->mimeType($this->getFilePath());
    }

    /**
     * Returns file size.
     *
     * @return int size in bytes
     *
     * @throws FilesystemException
     */
    public function getSize(): int
    {
        return $this->backend->fileSize($this->getFilePath());
    }
}
