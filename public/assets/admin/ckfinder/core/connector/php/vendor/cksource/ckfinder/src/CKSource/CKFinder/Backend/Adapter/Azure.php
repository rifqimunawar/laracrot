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

namespace CKSource\CKFinder\Backend\Adapter;

use League\Flysystem\AzureBlobStorage\AzureBlobStorageAdapter;
use League\Flysystem\Config;
use League\Flysystem\DirectoryAttributes;
use League\Flysystem\FileAttributes;
use League\Flysystem\FilesystemException;
use League\Flysystem\PathPrefixer;
use League\MimeTypeDetection\MimeTypeDetector;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\BlobProperties;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use MicrosoftAzure\Storage\Common\Models\ContinuationToken;

class Azure extends AzureBlobStorageAdapter implements EmulateRenameDirectoryInterface
{
    protected PathPrefixer $pathPrefixer;

    protected BlobRestProxy $client;

    protected string $container;

    private int $maxResultsForContentsListing;

    public function __construct(
        BlobRestProxy $client,
        string $container,
        string $prefix = '',
        MimeTypeDetector $mimeTypeDetector = null,
        int $maxResultsForContentsListing = 5000,
        string $visibilityHandling = self::ON_VISIBILITY_THROW_ERROR
    ) {
        parent::__construct($client, $container, $prefix, $mimeTypeDetector, $maxResultsForContentsListing, $visibilityHandling);

        $this->pathPrefixer = new PathPrefixer($prefix);
        $this->client = $client;
        $this->container = $container;
        $this->maxResultsForContentsListing = $maxResultsForContentsListing;
    }

    public function listContents(string $path, bool $deep = false): iterable
    {
        $resolved = $this->pathPrefixer->prefixDirectoryPath($path);

        $options = new ListBlobsOptions();
        $options->setPrefix($resolved);
        $options->setMaxResults($this->maxResultsForContentsListing);

        if (false === $deep) {
            $options->setDelimiter('/');
        }

        do {
            $response = $this->client->listBlobs($this->container, $options);

            foreach ($response->getBlobPrefixes() as $blobPrefix) {
                yield new DirectoryAttributes($this->pathPrefixer->stripDirectoryPrefix($blobPrefix->getName()));
            }

            foreach ($response->getBlobs() as $blob) {
                if (str_ends_with($blob->getUrl(), '/')) {
                    continue;
                }

                yield $this->normalizeBlobProperties(
                    $this->pathPrefixer->stripPrefix($blob->getName()),
                    $blob->getProperties()
                );
            }

            $continuationToken = $response->getContinuationToken();
            $options->setContinuationToken($continuationToken);
        } while ($continuationToken instanceof ContinuationToken);
    }

    /**
     * Emulates changing of directory name.
     *
     * @param string $path
     * @param string $newPath
     */
    public function renameDirectory($path, $newPath): bool
    {
        $sourcePath = $this->pathPrefixer->prefixPath(rtrim($path, '/').'/');

        $options = new ListBlobsOptions();
        $options->setPrefix($sourcePath);

        $listResults = $this->client->listBlobs($this->container, $options);

        foreach ($listResults->getBlobs() as $blob) {
            $this->client->copyBlob(
                $this->container,
                $this->replacePath($blob->getName(), $path, $newPath),
                $this->container,
                $blob->getName()
            );
            $this->client->deleteBlob($this->container, $blob->getName());
        }

        return true;
    }

    public function createDirectory(string $path, Config $config): void
    {
        $this->write(rtrim($path, '/').'/', ' ', $config);
    }

    /**
     * {@inheritdoc}
     *
     * @throws FilesystemException
     */
    public function has($path): bool|array|null
    {
        return $this->directoryExists($path);
    }

    /**
     * Helper method that replaces a part of the key (path).
     *
     * @param string $objectPath the bucket-relative object path
     * @param string $path       the old backend-relative path
     * @param string $newPath    the new backend-relative path
     *
     * @return string the new bucket-relative path
     */
    protected function replacePath(string $objectPath, string $path, string $newPath): string
    {
        $objectPath = $this->pathPrefixer->stripPrefix($objectPath);
        $newPath = trim($newPath, '/').'/';
        $path = trim($path, '/').'/';

        return $this->pathPrefixer->prefixPath($newPath.substr($objectPath, \strlen($path)));
    }

    private function normalizeBlobProperties(string $path, BlobProperties $properties): FileAttributes
    {
        return new FileAttributes(
            $path,
            $properties->getContentLength(),
            null,
            $properties->getLastModified()->getTimestamp(),
            $properties->getContentType()
        );
    }
}
