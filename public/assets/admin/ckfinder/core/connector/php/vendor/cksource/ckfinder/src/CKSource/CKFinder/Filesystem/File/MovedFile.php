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

use CKSource\CKFinder\CKFinder;
use CKSource\CKFinder\Filesystem\Path;
use CKSource\CKFinder\ResourceType\ResourceType;
use League\Flysystem\FilesystemException;
use League\Flysystem\UnableToDeleteFile;

/**
 * The MovedFile class.
 *
 * Represents the moved file.
 */
class MovedFile extends CopiedFile
{
    /**
     * Constructor.
     *
     * @param string       $fileName     source file name
     * @param string       $folder       source file resource type relative path
     * @param ResourceType $resourceType source file resource type
     * @param CKFinder     $app          app
     */
    public function __construct($fileName, $folder, ResourceType $resourceType, CKFinder $app)
    {
        parent::__construct($fileName, $folder, $resourceType, $app);
    }

    /**
     * Moves the current file.
     *
     * @return bool `true` if the file was moved successfully
     *
     * @throws \Exception
     */
    public function doMove()
    {
        $originalFilePath = $this->getFilePath();
        $originalFileName = $this->getFilename(); // Save original file name - it may be autorenamed when copied

        if (parent::doCopy()) {
            // Remove source file
            $this->deleteThumbnails();
            $this->resourceType->getResizedImageRepository()->deleteResizedImages($this->resourceType, $this->folder, $originalFileName);
            $this->getCache()->delete(Path::combine($this->resourceType->getName(), $this->folder, $originalFileName));

            try {
                $this->resourceType->getBackend()->delete($originalFilePath);
            } catch (FilesystemException $e) {
                throw new UnableToDeleteFile("Couldn't delete old file after move.");
            }

            return true;
        }

        return false;
    }
}
