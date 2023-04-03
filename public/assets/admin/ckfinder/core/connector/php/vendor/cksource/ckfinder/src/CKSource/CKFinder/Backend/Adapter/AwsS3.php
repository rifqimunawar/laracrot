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

use Aws\S3\S3ClientInterface;
use CKSource\CKFinder\CKFinder;
use CKSource\CKFinder\ContainerAwareInterface;
use CKSource\CKFinder\Operation\OperationManager;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;
use League\Flysystem\AwsS3V3\VisibilityConverter;
use League\Flysystem\FilesystemException;
use League\Flysystem\PathPrefixer;
use League\MimeTypeDetection\MimeTypeDetector;

/**
 * Custom adapter for AWS-S3.
 */
class AwsS3 extends AwsS3V3Adapter implements ContainerAwareInterface, EmulateRenameDirectoryInterface
{
    /**
     * @var string[]
     */
    private const EXTRA_METADATA_FIELDS = [
        'Metadata',
        'StorageClass',
        'ETag',
        'VersionId',
    ];

    /**
     * The CKFinder application container.
     */
    protected CKFinder $app;

    /**
     * @var S3ClientInterface
     */
    private $client;

    /**
     * @var PathPrefixer
     */
    private $prefixer;

    /**
     * @var string
     */
    private $bucket;

    public function __construct(
        S3ClientInterface $client,
        string $bucket,
        string $prefix = '',
        VisibilityConverter $visibility = null,
        MimeTypeDetector $mimeTypeDetector = null,
        array $options = [],
        bool $streamReads = true,
        array $forwardedOptions = self::AVAILABLE_OPTIONS,
        array $metadataFields = self::EXTRA_METADATA_FIELDS,
        array $multipartUploadOptions = self::MUP_AVAILABLE_OPTIONS
    ) {
        $this->client = $client;
        $this->prefixer = new PathPrefixer($prefix);
        $this->bucket = $bucket;

        parent::__construct(
            $client,
            $bucket,
            $prefix,
            $visibility,
            $mimeTypeDetector,
            $options,
            $streamReads,
            $forwardedOptions,
            $metadataFields,
            $multipartUploadOptions
        );
    }

    public function setContainer(CKFinder $app)
    {
        $this->app = $app;
    }

    /**
     * Emulates changing of directory name.
     *
     * @param string $path
     * @param string $newPath
     */
    public function renameDirectory($path, $newPath): bool
    {
        $sourcePath = $this->prefixer->prefixPath(rtrim($path, '/').'/');

        $objectsIterator = $this->client->getIterator('ListObjects', [
            'Bucket' => $this->bucket,
            'Prefix' => $sourcePath,
        ]);

        $objects = array_filter(iterator_to_array($objectsIterator), function ($v) {
            return isset($v['Key']);
        });

        if (!empty($objects)) {
            /** @var OperationManager $operation */
            $operation = $this->app['operation'];

            $operation->start();

            $total = \count($objects);
            $current = 0;

            foreach ($objects as $entry) {
                $this->client->copyObject([
                    'Bucket' => $this->bucket,
                    'Key' => $this->replacePath($entry['Key'], $path, $newPath),
                    'CopySource' => urlencode($this->bucket.'/'.$entry['Key']),
                ]);

                if ($operation->isAborted()) {
                    // Delete target folder in case if operation was aborted
                    $targetPath = $this->prefixer->prefixPath(rtrim($newPath, '/').'/');

                    $this->client->deleteMatchingObjects($this->bucket, $targetPath);

                    return true;
                }

                $operation->updateStatus(['total' => $total, 'current' => ++$current]);
            }

            $this->client->deleteMatchingObjects($this->bucket, $sourcePath);
        }

        return true;
    }

    /**
     * Returns a direct link to a file stored on S3.
     */
    public function getFileUrl(string $path): string
    {
        $objectPath = $this->prefixer->prefixPath($path);

        return $this->client->getObjectUrl($this->bucket, $objectPath);
    }

    /**
     * Returns the file MIME type.
     *
     * @throws FilesystemException
     */
    public function getMimeType(string $path): string
    {
        return $this->mimeType(strtolower($path))->mimeType();
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
        $objectPath = $this->prefixer->stripPrefix($objectPath);
        $newPath = trim($newPath, '/').'/';
        $path = trim($path, '/').'/';

        return $this->prefixer->prefixPath($newPath.substr($objectPath, \strlen($path)));
    }
}
