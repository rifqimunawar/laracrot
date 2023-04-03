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

namespace CKSource\CKFinder\Cache\Adapter;

use CKSource\CKFinder\Backend\Backend;
use CKSource\CKFinder\Filesystem\Path;
use League\Flysystem\FilesystemException;

/**
 * The BackendAdapter class.
 */
class BackendAdapter implements AdapterInterface
{
    protected Backend $backend;

    protected ?string $cachePath;

    /**
     * Constructor.
     */
    public function __construct(Backend $backend, ?string $path = null)
    {
        $this->backend = $backend;
        $this->cachePath = $path;
    }

    /**
     * Creates backend-relative path for cache file for given key.
     */
    public function createCachePath(string $key, bool $prefix = false): string
    {
        return Path::combine($this->cachePath, trim($key, '/').($prefix ? '' : '.cache'));
    }

    /**
     * Sets the value in cache under given key.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return bool true if successful
     */
    public function set($key, $value): bool
    {
        try {
            $this->backend->write($this->createCachePath($key), serialize($value));
        } catch (FilesystemException $e) {
            return false;
        }

        return true;
    }

    /**
     * Returns value under given key from cache.
     *
     * @param string $key
     *
     * @throws FilesystemException
     */
    public function get($key)
    {
        $cachePath = $this->createCachePath($key);

        if (!$this->backend->has($cachePath)) {
            return null;
        }

        return unserialize($this->backend->read($cachePath));
    }

    /**
     * Deletes value under given key  from cache.
     *
     * @param string $key
     *
     * @return bool true if successful
     *
     * @throws FilesystemException
     */
    public function delete($key): bool
    {
        $cachePath = $this->createCachePath($key);

        if (!$this->backend->has($cachePath)) {
            return false;
        }

        try {
            $this->backend->delete($cachePath);
        } catch (FilesystemException $e) {
            return false;
        }

        $dirs = explode('/', \dirname($cachePath));

        do {
            $dirPath = implode('/', $dirs);
            $contents = $this->backend->listContents($dirPath);

            if (!empty($contents)) {
                break;
            }

            try {
                $this->backend->deleteDirectory($dirPath);
            } catch (FilesystemException $e) {
                return false;
            }

            array_pop($dirs);
        } while (!empty($dirs));

        return true;
    }

    /**
     * Deletes all cache entries with given key prefix.
     *
     * @param string $keyPrefix
     *
     * @return bool true if successful
     */
    public function deleteByPrefix($keyPrefix): bool
    {
        $cachePath = $this->createCachePath($keyPrefix, true);
        if ($this->backend->hasDirectory($cachePath)) {
            try {
                $this->backend->deleteDirectory($cachePath);
            } catch (FilesystemException $e) {
                return false;
            }
        }

        return true;
    }

    /**
     * Changes prefix for all entries given key prefix.
     *
     * @param string $sourcePrefix
     * @param string $targetPrefix
     *
     * @return bool true if successful
     *
     * @throws FilesystemException
     */
    public function changePrefix($sourcePrefix, $targetPrefix): bool
    {
        $sourceCachePath = $this->createCachePath($sourcePrefix, true);

        if (!$this->backend->hasDirectory($sourceCachePath)) {
            return false;
        }

        $targetCachePath = $this->createCachePath($targetPrefix, true);

        return $this->backend->rename($sourceCachePath, $targetCachePath);
    }
}
