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

namespace CKSource\CKFinder\Acl;

/**
 * The Permission class.
 */
class Permission
{
    public const FOLDER_VIEW = 1;
    public const FOLDER_CREATE = 2;
    public const FOLDER_RENAME = 4;
    public const FOLDER_DELETE = 8;

    public const FILE_VIEW = 16;
    public const FILE_CREATE = 32;
    public const FILE_RENAME = 64;
    public const FILE_DELETE = 128;

    public const IMAGE_RESIZE = 256;
    public const IMAGE_RESIZE_CUSTOM = 512;

    /**
     * @deprecated use FILE_CREATE instead
     */
    public const FILE_UPLOAD = 32;

    /**
     * Returns an array of all permissions defined in the Permission class constants.
     *
     * @return array an array of permission constants in the form of
     *               PERMISSION_NAME => value
     */
    public static function getAll()
    {
        $ref = new \ReflectionClass(__CLASS__);

        return $ref->getConstants();
    }

    /**
     * Returns a numeric value for the passed permission name.
     *
     * @param string $name permission constant name
     *
     * @return int permission value
     *
     * @throws \InvalidArgumentException when the permission with a given name was not found
     */
    public static function byName($name)
    {
        $formattedName = sprintf('static::%s', strtoupper($name));

        if (!\defined($formattedName)) {
            throw new \InvalidArgumentException(sprintf('The permission "%s" doesn\'t exist', $name));
        }

        return \constant($formattedName);
    }
}
