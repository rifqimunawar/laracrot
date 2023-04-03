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

namespace CKSource\CKFinder\Command;

use CKSource\CKFinder\Acl\Permission;
use CKSource\CKFinder\Filesystem\Folder\WorkingFolder;
use CKSource\CKFinder\Utils;
use League\Flysystem\FileAttributes;

class GetFiles extends CommandAbstract
{
    protected $requires = [Permission::FILE_VIEW];

    public function execute(WorkingFolder $workingFolder)
    {
        $data = new \stdClass();
        $files = $workingFolder->listFiles();

        $data->files = [];

        /** @var FileAttributes $file */
        foreach ($files as $file) {
            $path_parts = pathinfo($file->path());
            $fileObject = [
                'name' => $path_parts['basename'],
                'date' => Utils::formatDate($file->lastModified()),
                'size' => Utils::formatSize($file->fileSize()),
            ];

            $data->files[] = $fileObject;
        }

        // Sort files
        usort($data->files, function ($a, $b) {
            return strnatcasecmp($a['name'], $b['name']);
        });

        return $data;
    }
}
