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

namespace CKSource\CKFinder\Event;

use CKSource\CKFinder\CKFinder;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\Request;

/**
 * The CKFinderEvent class.
 *
 * The base class for all CKFinder events.
 */
class CKFinderEvent extends GenericEvent
{
    /**
     * The beforeCommand events.
     *
     * These events occur before a command is executed, after a particular
     * command is resolved, i.e. it is decided which command class should be used
     * to handle the current request.
     */
    public const BEFORE_COMMAND_PREFIX = 'ckfinder.beforeCommand.';

    public const BEFORE_COMMAND_INIT = 'ckfinder.beforeCommand.init';
    public const BEFORE_COMMAND_COPY_FILES = 'ckfinder.beforeCommand.copyFiles';
    public const BEFORE_COMMAND_CREATE_FOLDER = 'ckfinder.beforeCommand.createFolder';
    public const BEFORE_COMMAND_DELETE_FILES = 'ckfinder.beforeCommand.deleteFiles';
    public const BEFORE_COMMAND_DELETE_FOLDER = 'ckfinder.beforeCommand.deleteFolder';
    public const BEFORE_COMMAND_DOWNLOAD_FILE = 'ckfinder.beforeCommand.downloadFile';
    public const BEFORE_COMMAND_FILE_UPLOAD = 'ckfinder.beforeCommand.fileUpload';
    public const BEFORE_COMMAND_GET_FILES = 'ckfinder.beforeCommand.getFiles';
    public const BEFORE_COMMAND_GET_FILE_URL = 'ckfinder.beforeCommand.getFileUrl';
    public const BEFORE_COMMAND_GET_FOLDERS = 'ckfinder.beforeCommand.getFolders';
    public const BEFORE_COMMAND_GET_RESIZED_IMAGES = 'ckfinder.beforeCommand.getResizedImages';
    public const BEFORE_COMMAND_IMAGE_EDIT = 'ckfinder.beforeCommand.imageEdit';
    public const BEFORE_COMMAND_IMAGE_INFO = 'ckfinder.beforeCommand.imageInfo';
    public const BEFORE_COMMAND_IMAGE_PREVIEW = 'ckfinder.beforeCommand.imagePreview';
    public const BEFORE_COMMAND_IMAGE_RESIZE = 'ckfinder.beforeCommand.imageResize';
    public const BEFORE_COMMAND_MOVE_FILES = 'ckfinder.beforeCommand.moveFiles';
    public const BEFORE_COMMAND_QUICK_UPLOAD = 'ckfinder.beforeCommand.quickUpload';
    public const BEFORE_COMMAND_RENAME_FILE = 'ckfinder.beforeCommand.renameFile';
    public const BEFORE_COMMAND_RENAME_FOLDER = 'ckfinder.beforeCommand.renameFolder';
    public const BEFORE_COMMAND_SAVE_IMAGE = 'ckfinder.beforeCommand.saveImage';
    public const BEFORE_COMMAND_THUMBNAIL = 'ckfinder.beforeCommand.thumbnail';

    /**
     * Intermediate events.
     */
    public const COPY_FILE = 'ckfinder.copyFiles.copy';
    public const CREATE_FOLDER = 'ckfinder.createFolder.create';
    public const DELETE_FILE = 'ckfinder.deleteFiles.delete';
    public const DELETE_FOLDER = 'ckfinder.deleteFolder.delete';
    public const DOWNLOAD_FILE = 'ckfinder.downloadFile.download';
    public const PROXY_DOWNLOAD = 'ckfinder.proxy.download';
    public const FILE_UPLOAD = 'ckfinder.uploadFile.upload';
    public const MOVE_FILE = 'ckfinder.moveFiles.move';
    public const RENAME_FILE = 'ckfinder.renameFile.rename';
    public const RENAME_FOLDER = 'ckfinder.renameFolder.rename';
    public const SAVE_IMAGE = 'ckfinder.saveImage.save';
    public const EDIT_IMAGE = 'ckfinder.imageEdit.save';
    public const CREATE_THUMBNAIL = 'ckfinder.thumbnail.createThumbnail';
    public const CREATE_RESIZED_IMAGE = 'ckfinder.imageResize.createResizedImage';

    public const CREATE_RESPONSE_PREFIX = 'ckfinder.createResponse.';

    /**
     * The afterCommand events.
     *
     * These events occur after a command execution, when a response for
     * a command was created.
     */
    public const AFTER_COMMAND_PREFIX = 'ckfinder.afterCommand.';

    public const AFTER_COMMAND_INIT = 'ckfinder.afterCommand.init';
    public const AFTER_COMMAND_COPY_FILES = 'ckfinder.afterCommand.copyFiles';
    public const AFTER_COMMAND_CREATE_FOLDER = 'ckfinder.afterCommand.createFolder';
    public const AFTER_COMMAND_DELETE_FILES = 'ckfinder.afterCommand.deleteFiles';
    public const AFTER_COMMAND_DELETE_FOLDER = 'ckfinder.afterCommand.deleteFolder';
    public const AFTER_COMMAND_DOWNLOAD_FILE = 'ckfinder.afterCommand.downloadFile';
    public const AFTER_COMMAND_FILE_UPLOAD = 'ckfinder.afterCommand.fileUpload';
    public const AFTER_COMMAND_GET_FILES = 'ckfinder.afterCommand.getFiles';
    public const AFTER_COMMAND_GET_FILE_URL = 'ckfinder.afterCommand.getFileUrl';
    public const AFTER_COMMAND_GET_FOLDERS = 'ckfinder.afterCommand.getFolders';
    public const AFTER_COMMAND_GET_RESIZED_IMAGES = 'ckfinder.afterCommand.getResizedImages';
    public const AFTER_COMMAND_IMAGE_EDIT = 'ckfinder.afterCommand.imageEdit';
    public const AFTER_COMMAND_IMAGE_INFO = 'ckfinder.afterCommand.imageInfo';
    public const AFTER_COMMAND_IMAGE_PREVIEW = 'ckfinder.afterCommand.imagePreview';
    public const AFTER_COMMAND_IMAGE_RESIZE = 'ckfinder.afterCommand.imageResize';
    public const AFTER_COMMAND_MOVE_FILES = 'ckfinder.afterCommand.moveFiles';
    public const AFTER_COMMAND_QUICK_UPLOAD = 'ckfinder.afterCommand.quickUpload';
    public const AFTER_COMMAND_RENAME_FILE = 'ckfinder.afterCommand.renameFile';
    public const AFTER_COMMAND_RENAME_FOLDER = 'ckfinder.afterCommand.renameFolder';
    public const AFTER_COMMAND_SAVE_IMAGE = 'ckfinder.afterCommand.saveImage';
    public const AFTER_COMMAND_THUMBNAIL = 'ckfinder.afterCommand.thumbnail';

    /**
     * The CKFinder instance.
     *
     * @var CKFinder
     */
    protected $app;

    /**
     * Constructor.
     */
    public function __construct(CKFinder $app)
    {
        parent::__construct();

        $this->app = $app;
    }

    /**
     * Returns the application dependency injection container.
     *
     * @return CKFinder
     */
    public function getContainer()
    {
        return $this->app;
    }

    /**
     * Returns the current request object.
     *
     * @return null|Request
     */
    public function getRequest()
    {
        return $this->app['request_stack']->getCurrentRequest();
    }
}
