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
use CKSource\CKFinder\Exception\InvalidRequestException;
use CKSource\CKFinder\Filesystem\Folder\WorkingFolder;
use CKSource\CKFinder\Filesystem\Path;
use CKSource\CKFinder\ResourceType\ResourceType;
use League\Flysystem\FilesystemException;

/**
 * The CopiedFile class.
 *
 * Represents a copied file.
 */
class CopiedFile extends ExistingFile
{
    /**
     * @var WorkingFolder
     */
    protected $targetFolder;

    /**
     * @var string defines copy options in case a file already exists
     *             in the target directory:
     *             - autorename - Renames the current file (see File::autorename()).
     *             - overwrite - Overwrites the existing file.
     */
    protected string $copyOptions;

    /**
     * File name of the source file.
     */
    protected string $sourceFileName;

    /**
     * Constructor.
     *
     * @param string       $fileName     source file name
     * @param string       $folder       copied source file resource type relative path
     * @param ResourceType $resourceType source file resource type
     * @param CKFinder     $app          CKFinder
     */
    public function __construct($fileName, $folder, ResourceType $resourceType, CKFinder $app)
    {
        $this->targetFolder = $app['working_folder'];

        $this->sourceFileName = $fileName;

        parent::__construct($fileName, $folder, $resourceType, $app);
    }

    /**
     * Returns the target folder for a copied file.
     */
    public function getTargetFolder(): WorkingFolder
    {
        return $this->targetFolder;
    }

    public function getFileName(): string
    {
        return $this->sourceFileName;
    }

    /**
     * Sets copy options.
     *
     * @see CopiedFile::$copyOptions
     */
    public function setCopyOptions(string $copyOptions)
    {
        $this->copyOptions = $copyOptions;
    }

    /**
     * Checks if the file has an extension allowed in both source and target ResourceTypes.
     *
     * @return bool `true` if the file has an extension allowed in source and target directories
     */
    public function hasAllowedExtension(): bool
    {
        $extension = $this->getExtension();

        return parent::hasAllowedExtension()
               && $this->targetFolder->getResourceType()->isAllowedExtension($extension);
    }

    /**
     * Checks if the copied file size does not exceed the file size limit set for the target folder.
     *
     * @throws FilesystemException
     */
    public function hasAllowedSize(): bool
    {
        $filePath = $this->getFilePath();
        $backend = $this->resourceType->getBackend();

        if (!$backend->has($filePath)) {
            return false;
        }

        $fileSize = $this->resourceType->getBackend()->fileSize($filePath);

        $maxSize = $this->targetFolder->getResourceType()->getMaxSize();

        if ($maxSize && $fileSize > $maxSize) {
            return false;
        }

        return true;
    }

    /**
     * @copydoc File::autorename()
     *
     * @param mixed $path
     */
    public function autorename(Backend $backend = null, $path = ''): bool
    {
        return parent::autorename($this->targetFolder->getBackend(), $this->targetFolder->getPath());
    }

    /**
     * Copies the current file.
     *
     * @return bool `true` if the file was copied successfully
     *
     * @throws \Exception
     */
    public function doCopy(): bool
    {
        $originalFileStream = $this->getContentsStream();

        // Don't copy file to itself
        if ($this->targetFolder->getBackend() === $this->resourceType->getBackend()
            && $this->targetFolder->getPath() === $this->getPath()) {
            $this->addError(Error::SOURCE_AND_TARGET_PATH_EQUAL);

            return false;
        }

        $targetFilename = $this->getTargetFilename();

        if ($this->targetFolder->containsFile($targetFilename) && false === strpos($this->copyOptions, 'overwrite')) {
            $this->addError(Error::ALREADY_EXIST);

            return false;
        }

        if ($this->targetFolder->putStream($targetFilename, $originalFileStream)) {
            $resizedImageRepository = $this->resourceType->getResizedImageRepository();
            $resizedImageRepository->copyResizedImages(
                $this->resourceType,
                $this->folder,
                $this->sourceFileName,
                $this->targetFolder->getResourceType(),
                $this->targetFolder->getClientCurrentFolder(),
                $targetFilename
            );

            $this->getCache()->copy(
                Path::combine($this->resourceType->getName(), $this->folder, $this->sourceFileName),
                Path::combine($this->targetFolder->getResourceType()->getName(), $this->targetFolder->getClientCurrentFolder(), $targetFilename)
            );

            return true;
        }
        $this->addError(Error::ACCESS_DENIED);

        return false;
    }

    /**
     * Returns the target file name of the copied file.
     *
     * @return string
     */
    public function getTargetFilename()
    {
        if ($this->targetFolder->containsFile($this->getFilename())
            && false === strpos($this->copyOptions, 'overwrite')
            && false !== strpos($this->copyOptions, 'autorename')) {
            $this->autorename();
        }

        return $this->fileName;
    }

    /**
     * Returns the source file name of the copied file.
     */
    public function getSourceFilename(): string
    {
        return $this->sourceFileName;
    }

    /**
     * Returns the target path of the copied file.
     */
    public function getTargetFilePath(): string
    {
        return Path::combine($this->getTargetFolder()->getPath(), $this->getTargetFilename());
    }

    /**
     * Returns the source file name of the copied file.
     */
    public function getSourceFilePath(): string
    {
        return Path::combine($this->getPath(), $this->sourceFileName);
    }

    /**
     * Validates the copied file.
     *
     * @return bool `true` if the copied file is valid and ready to be copied
     *
     * @throws FilesystemException
     * @throws \Exception
     */
    public function isValid()
    {
        if (!$this->hasValidFilename() || !$this->hasValidPath()) {
            throw new InvalidRequestException('Invalid filename or path');
        }

        if (!$this->hasAllowedExtension()) {
            $this->addError(Error::INVALID_EXTENSION);

            return false;
        }

        if ($this->isHidden() || $this->hasHiddenPath()) {
            throw new InvalidRequestException('Copied file is hidden');
        }

        if (!$this->exists()) {
            $this->addError(Error::FILE_NOT_FOUND);

            return false;
        }

        if (!$this->hasAllowedSize()) {
            $this->addError(Error::UPLOADED_TOO_BIG);

            return false;
        }

        return true;
    }
}
