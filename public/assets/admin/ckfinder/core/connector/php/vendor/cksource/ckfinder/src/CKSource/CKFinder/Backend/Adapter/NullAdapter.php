<?php

declare(strict_types=1);

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

namespace CKSource\CKFinder\Backend\Adapter;

use League\Flysystem\Config;
use League\Flysystem\FileAttributes;
use League\Flysystem\FilesystemAdapter;
use League\Flysystem\PathPrefixer;

class NullAdapter implements FilesystemAdapter
{
    protected PathPrefixer $pathPrefixer;

    public function __construct()
    {
        $this->pathPrefixer = new PathPrefixer('');
    }

    public function fileExists(string $path): bool
    {
        return false;
    }

    public function write(string $path, string $contents, Config $config): void
    {
    }

    public function writeStream(string $path, $contents, Config $config): void
    {
    }

    public function read(string $path): string
    {
        return '';
    }

    /**
     * @return resource
     */
    public function readStream(string $path)
    {
        /** @var resource $stream */
        $stream = fopen('php://temp', 'w+');
        fwrite($stream, '');
        rewind($stream);

        return $stream;
    }

    public function delete(string $path): void
    {
    }

    public function directoryExists(string $location): bool
    {
        $location = $this->pathPrefixer->prefixPath($location);

        return is_dir($location);
    }

    public function deleteDirectory(string $path): void
    {
    }

    public function createDirectory(string $path, Config $config): void
    {
    }

    public function setVisibility(string $path, string $visibility): void
    {
    }

    public function visibility(string $path): FileAttributes
    {
        return new FileAttributes('');
    }

    public function mimeType(string $path): FileAttributes
    {
        return new FileAttributes('');
    }

    public function lastModified(string $path): FileAttributes
    {
        return new FileAttributes('');
    }

    public function fileSize(string $path): FileAttributes
    {
        return new FileAttributes('');
    }

    public function listContents(string $path, bool $deep): iterable
    {
        return [];
    }

    public function move(string $source, string $destination, Config $config): void
    {
    }

    public function copy(string $source, string $destination, Config $config): void
    {
    }
}
