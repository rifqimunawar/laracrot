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

namespace CKSource\CKFinder\ResizedImage;

use CKSource\CKFinder\Acl\Acl;
use CKSource\CKFinder\Acl\Permission;
use CKSource\CKFinder\CKFinder;
use CKSource\CKFinder\Config;
use CKSource\CKFinder\Event\CKFinderEvent;
use CKSource\CKFinder\Event\ResizeImageEvent;
use CKSource\CKFinder\Exception\FileNotFoundException;
use CKSource\CKFinder\Exception\UnauthorizedException;
use CKSource\CKFinder\Filesystem\Path;
use CKSource\CKFinder\ResourceType\ResourceType;
use Exception;
use League\Flysystem\FilesystemException;

/**
 * The ThumbnailRepository class.
 *
 * A class responsible for resized image management that simplifies
 * operations on resized versions of the image file, like batch renaming/moving
 * together with the original file.
 */
class ResizedImageRepository
{
    /**
     * @var CKFinder
     */
    protected $app;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var Acl
     */
    protected $acl;

    /**
     * Event dispatcher.
     */
    protected $dispatcher;

    public function __construct(CKFinder $app)
    {
        $this->config = $app['config'];
        $this->acl = $app['acl'];
        $this->dispatcher = $app['dispatcher'];
        $this->app = $app;
    }

    /**
     * Returns a resized image for the provided source file.
     *
     * If an appropriate resized version already exists, it is reused.
     *
     * @throws FileNotFoundException
     * @throws UnauthorizedException
     */
    public function getResizedImage(
        ResourceType $sourceFileResourceType,
        string $sourceFileDir,
        string $sourceFileName,
        int $requestedWidth,
        int $requestedHeight
    ): ResizedImage {
        $resizedImage = new ResizedImage(
            $this,
            $sourceFileResourceType,
            $sourceFileDir,
            $sourceFileName,
            $requestedWidth,
            $requestedHeight
        );

        if (!$this->acl->isAllowed($sourceFileResourceType->getName(), $sourceFileDir, Permission::IMAGE_RESIZE_CUSTOM)
            && !$this->isSizeAllowedInConfig($requestedWidth, $requestedHeight)) {
            throw new UnauthorizedException('Provided size is not allowed in images.sizes configuration');
        }

        if (!$resizedImage->exists() && $resizedImage->requestedSizeIsValid()) {
            $resizedImage->create();

            $resizeImageEvent = new ResizeImageEvent($this->app, $resizedImage);
            $this->dispatcher->dispatch($resizeImageEvent, CKFinderEvent::CREATE_RESIZED_IMAGE);

            if (!$resizeImageEvent->isPropagationStopped()) {
                $resizedImage = $resizeImageEvent->getResizedImage();
                $resizedImage->save();
            }
        }

        return $resizedImage;
    }

    /**
     * Returns an existing resized image.
     *
     * @throws FileNotFoundException
     * @throws FilesystemException
     * @throws Exception
     */
    public function getExistingResizedImage(
        ResourceType $sourceFileResourceType,
        string $sourceFileDir,
        string $sourceFileName,
        string $thumbnailFileName
    ): ResizedImage {
        $size = ResizedImage::getSizeFromFilename($thumbnailFileName);

        $resizedImage = new ResizedImage(
            $this,
            $sourceFileResourceType,
            $sourceFileDir,
            $sourceFileName,
            $size['width'],
            $size['height'],
            true
        );

        if (!$resizedImage->exists()) {
            throw new FileNotFoundException('Resized image not found');
        }

        $resizedImage->load();

        return $resizedImage;
    }

    public function getContainer(): CKFinder
    {
        return $this->app;
    }

    /**
     * Deletes all resized images for a given file.
     *
     * @return bool `true` if deleted
     */
    public function deleteResizedImages(ResourceType $sourceFileResourceType, string $sourceFilePath, string $sourceFileName): bool
    {
        $resizedImagesPath = Path::combine($sourceFileResourceType->getDirectory(), $sourceFilePath, ResizedImage::DIR, $sourceFileName);

        $backend = $sourceFileResourceType->getBackend();

        if ($backend->hasDirectory($resizedImagesPath)) {
            try {
                $backend->deleteDirectory($resizedImagesPath);

                return true;
            } catch (FilesystemException $e) {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Copies all resized images for a given file.
     *
     * @throws FilesystemException
     */
    public function copyResizedImages(
        ResourceType $sourceFileResourceType,
        string $sourceFilePath,
        string $sourceFileName,
        ResourceType $targetFileResourceType,
        string $targetFilePath,
        string $targetFileName
    ): void {
        $sourceResizedImagesPath = Path::combine($sourceFileResourceType->getDirectory(), $sourceFilePath, ResizedImage::DIR, $sourceFileName);
        $targetResizedImagesPath = Path::combine($targetFileResourceType->getDirectory(), $targetFilePath, ResizedImage::DIR, $targetFileName);

        $sourceBackend = $sourceFileResourceType->getBackend();
        $targetBackend = $targetFileResourceType->getBackend();

        if ($sourceBackend->hasDirectory($sourceResizedImagesPath)) {
            $resizedImages = $sourceBackend->listContents($sourceResizedImagesPath)->toArray();

            foreach ($resizedImages as $resizedImage) {
                if (!isset($resizedImage['path'])) {
                    continue;
                }

                $resizedImageStream = $sourceBackend->readStream($resizedImage['path']);

                $sourceImageSize = ResizedImage::getSizeFromFilename(pathinfo($resizedImage['path'], PATHINFO_BASENAME));
                $targetImageFilename = ResizedImage::createFilename($targetFileName, $sourceImageSize['width'], $sourceImageSize['height']);

                $targetBackend->writeStream(Path::combine($targetResizedImagesPath, $targetImageFilename), $resizedImageStream);
            }
        }
    }

    /**
     * Renames all resized images created for a given file.
     *
     * @throws FilesystemException
     */
    public function renameResizedImages(
        ResourceType $sourceFileResourceType,
        string $sourceFilePath,
        string $originalSourceFileName,
        string $newSourceFileName
    ): void {
        $resizedImagesDir = Path::combine($sourceFileResourceType->getDirectory(), $sourceFilePath, ResizedImage::DIR);
        $resizedImagesPath = Path::combine($resizedImagesDir, $originalSourceFileName);
        $newResizedImagesPath = Path::combine($resizedImagesDir, $newSourceFileName);

        $backend = $sourceFileResourceType->getBackend();

        if ($backend->hasDirectory($resizedImagesPath)) {
            if ($backend->rename($resizedImagesPath, $newResizedImagesPath)) {
                $resizedImages = $backend->listContents($newResizedImagesPath)->toArray();

                foreach ($resizedImages as $resizedImage) {
                    if (!isset($resizedImage['path'])) {
                        continue;
                    }

                    $sourceImageSize = ResizedImage::getSizeFromFilename(pathinfo($resizedImage['path'], PATHINFO_BASENAME));

                    $newResizedImageFilename = ResizedImage::createFilename($newSourceFileName, $sourceImageSize['width'], $sourceImageSize['height']);

                    $backend->rename($resizedImage['path'], Path::combine($newResizedImagesPath, $newResizedImageFilename));
                }
            }
        }
    }

    /**
     * Returns a list of resized images generated for a given file.
     *
     * @param ResourceType $sourceFileResourceType source file resource type
     * @param string       $sourceFilePath         source file backend-relative path
     * @param string       $sourceFileName         source file name
     * @param array        $filterSizes            array containing names of sizes defined
     *                                             in the `images.sizes` configuration
     *
     * @throws FilesystemException
     */
    public function getResizedImagesList(
        ResourceType $sourceFileResourceType,
        string $sourceFilePath,
        string $sourceFileName,
        array $filterSizes = []
    ): array {
        $resizedImagesPath = Path::combine($sourceFileResourceType->getDirectory(), $sourceFilePath, ResizedImage::DIR, $sourceFileName);

        $backend = $sourceFileResourceType->getBackend();

        $resizedImages = [];

        if (!$backend->hasDirectory($resizedImagesPath)) {
            return $resizedImages;
        }

        $resizedImagesFiles = array_filter(
            $backend->listContents($resizedImagesPath)->toArray(),
            function ($v) use ($sourceFileResourceType) {
                return
                    isset($v['type'])
                    && 'file' === $v['type']
                    && \in_array(pathinfo($v['path'], PATHINFO_EXTENSION), $sourceFileResourceType->getAllowedExtensions(), true);
            }
        );

        foreach ($resizedImagesFiles as $resizedImage) {
            $size = ResizedImage::getSizeFromFilename(pathinfo($resizedImage['path'], PATHINFO_BASENAME));

            $sizeName = $this->getSizeNameFromConfig($size['width'], $size['height']);
            if ($sizeName) {
                if (empty($filterSizes) || \in_array($sizeName, $filterSizes, true)) {
                    $resizedImages[$sizeName] = $this->createNodeValue($resizedImage);
                }

                continue;
            }

            if (empty($filterSizes)) {
                if (!isset($resizedImages['__custom'])) {
                    $resizedImages['__custom'] = [];
                }

                $resizedImages['__custom'][] = $this->createNodeValue($resizedImage);
            }
        }

        if (isset($resizedImages['__custom'])) {
            $resizedImages['__custom'] = $this->sortImagesBySize($resizedImages['__custom']);
        }

        return $resizedImages;
    }

    /**
     * @throws FilesystemException
     * @throws Exception
     */
    public function getResizedImageBySize(
        ResourceType $sourceFileResourceType,
        string $sourceFilePath,
        string $sourceFileName,
        int $width,
        int $height
    ): ?ResizedImage {
        $resizedImagesPath = Path::combine($sourceFileResourceType->getDirectory(), $sourceFilePath, ResizedImage::DIR, $sourceFileName);

        $backend = $sourceFileResourceType->getBackend();

        if (!$backend->hasDirectory($resizedImagesPath)) {
            return null;
        }

        $resizedImagesFiles = array_filter(
            $backend->listContents($resizedImagesPath)->toArray(),
            function ($v) {
                return isset($v['type']) && 'file' === $v['type'];
            }
        );

        $thresholdPixels = $this->config->get('images.threshold.pixels');
        $thresholdPercent = (float) $this->config->get('images.threshold.percent') / 100;

        foreach ($resizedImagesFiles as $resizedImage) {
            $resizedImageSize = ResizedImage::getSizeFromFilename(pathinfo($resizedImage['path'], PATHINFO_BASENAME));
            $resizedImageWidth = $resizedImageSize['width'];
            $resizedImageHeight = $resizedImageSize['height'];
            if ($resizedImageWidth >= $width && ($resizedImageWidth <= $width + $thresholdPixels || $resizedImageWidth <= $width + $width * $thresholdPercent)
                && $resizedImageHeight >= $height && ($resizedImageHeight <= $height + $thresholdPixels || $resizedImageHeight <= $height + $height * $thresholdPercent)) {
                $resizedImage = new ResizedImage(
                    $this,
                    $sourceFileResourceType,
                    $sourceFilePath,
                    $sourceFileName,
                    $resizedImageWidth,
                    $resizedImageHeight
                );

                if ($resizedImage->exists()) {
                    $resizedImage->load();

                    return $resizedImage;
                }
            }
        }

        return null;
    }

    /**
     * Checks if the provided image size is allowed in the configuration.
     *
     * This is checked when `Permission::IMAGE_RESIZE_CUSTOM`
     * is not allowed in the source file folder.
     *
     * @return bool `true` if the provided size is allowed in the configuration
     */
    protected function isSizeAllowedInConfig(int $width, int $height): bool
    {
        $configSizes = $this->config->get('images.sizes');

        foreach ($configSizes as $size) {
            if ($size['width'] === $width && $size['height'] === $height) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns the size name defined in the configuration, where width
     * or height are equal to those given in parameters.
     *
     * Resized images keep the original image aspect ratio.
     * When an image is resized using the size from the configuration,
     * at least one of the borders has the same length.
     */
    protected function getSizeNameFromConfig(int $width, int $height): ?string
    {
        $configSizes = $this->config->get('images.sizes');

        foreach ($configSizes as $sizeName => $size) {
            if ($size['width'] === $width || $size['height'] === $height) {
                return $sizeName;
            }
        }

        return null;
    }

    protected function createNodeValue($resizedImage)
    {
        $pathParts = pathinfo($resizedImage['path']);

        if (isset($resizedImage['url'])) {
            return [
                'name' => $pathParts['basename'],
                'url' => $resizedImage['url'],
            ];
        }

        return $pathParts['basename'];
    }

    protected function sortImagesBySize(array $custom): array
    {
        $values = [];
        $keys = [];

        foreach ($custom as $key => $image) {
            $size = ResizedImage::getSizeFromFilename($image);
            $values[$size['width']] = $image;
            $keys[] = $key;
        }
        ksort($values);

        return array_combine($keys, $values);
    }
}
