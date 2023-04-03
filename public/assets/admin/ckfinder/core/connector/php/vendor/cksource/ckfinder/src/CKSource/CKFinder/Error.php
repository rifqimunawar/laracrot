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

namespace CKSource\CKFinder;

/**
 * The Error class.
 */
class Error
{
    public const NONE = 0;
    public const CUSTOM_ERROR = 1;
    public const INVALID_COMMAND = 10;
    public const TYPE_NOT_SPECIFIED = 11;
    public const INVALID_TYPE = 12;
    public const INVALID_CONFIG = 13;
    public const INVALID_PLUGIN = 14;
    public const INVALID_NAME = 102;
    public const UNAUTHORIZED = 103;
    public const ACCESS_DENIED = 104;
    public const INVALID_EXTENSION = 105;
    public const INVALID_REQUEST = 109;
    public const UNKNOWN = 110;
    public const CREATED_FILE_TOO_BIG = 111;
    public const ALREADY_EXIST = 115;
    public const FOLDER_NOT_FOUND = 116;
    public const FILE_NOT_FOUND = 117;
    public const SOURCE_AND_TARGET_PATH_EQUAL = 118;
    public const UPLOADED_FILE_RENAMED = 201;
    public const UPLOADED_INVALID = 202;
    public const UPLOADED_TOO_BIG = 203;
    public const UPLOADED_CORRUPT = 204;
    public const UPLOADED_NO_TMP_DIR = 205;
    public const UPLOADED_WRONG_HTML_FILE = 206;
    public const UPLOADED_INVALID_NAME_RENAMED = 207;
    public const MOVE_FAILED = 300;
    public const COPY_FAILED = 301;
    public const DELETE_FAILED = 302;
    public const ZIP_FAILED = 303;
    public const CONNECTOR_DISABLED = 500;
    public const THUMBNAILS_DISABLED = 501;
}
