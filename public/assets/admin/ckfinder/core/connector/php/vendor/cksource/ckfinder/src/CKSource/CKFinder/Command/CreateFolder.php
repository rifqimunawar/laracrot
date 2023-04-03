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
use CKSource\CKFinder\Event\CKFinderEvent;
use CKSource\CKFinder\Event\CreateFolderEvent;
use CKSource\CKFinder\Exception\AccessDeniedException;
use CKSource\CKFinder\Exception\AlreadyExistsException;
use CKSource\CKFinder\Exception\InvalidNameException;
use CKSource\CKFinder\Filesystem\Folder\WorkingFolder;
use League\Flysystem\FilesystemException;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;

class CreateFolder extends CommandAbstract
{
    protected $requestMethod = Request::METHOD_POST;

    protected $requires = [Permission::FOLDER_CREATE];

    /**
     * @throws InvalidNameException
     * @throws AccessDeniedException
     * @throws AlreadyExistsException
     * @throws FilesystemException
     */
    public function execute(Request $request, WorkingFolder $workingFolder, EventDispatcher $dispatcher): array
    {
        $newFolderName = (string) $request->query->get('newFolderName', '');

        $createFolderEvent = new CreateFolderEvent($this->app, $workingFolder, $newFolderName);

        $dispatcher->dispatch($createFolderEvent, CKFinderEvent::CREATE_FOLDER);

        $created = false;
        $createdFolderName = null;

        if (!$createFolderEvent->isPropagationStopped()) {
            $newFolderName = $createFolderEvent->getNewFolderName();
            list($createdFolderName, $created) = $workingFolder->createDirectory($newFolderName);
        }

        return ['newFolder' => $createdFolderName, 'created' => (int) $created];
    }
}
