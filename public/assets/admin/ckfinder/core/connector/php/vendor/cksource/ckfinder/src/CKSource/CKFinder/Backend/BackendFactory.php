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

namespace CKSource\CKFinder\Backend;

use Aws\S3\S3Client;
use CKSource\CKFinder\Acl\AclInterface;
use CKSource\CKFinder\Backend\Adapter\AwsS3;
use CKSource\CKFinder\Backend\Adapter\Azure;
use CKSource\CKFinder\Backend\Adapter\Dropbox\Dropbox as DropboxAdapter;
use CKSource\CKFinder\Backend\Adapter\Dropbox\DropboxTokenManager;
use CKSource\CKFinder\Backend\Adapter\Local;
use CKSource\CKFinder\CKFinder;
use CKSource\CKFinder\Config;
use CKSource\CKFinder\ContainerAwareInterface;
use CKSource\CKFinder\Exception\CKFinderException;
use CKSource\CKFinder\Filesystem\Path;
use InvalidArgumentException;
use League\Flysystem\FilesystemAdapter;
use League\Flysystem\FilesystemException;
use League\Flysystem\Ftp\FtpAdapter;
use League\Flysystem\Ftp\FtpConnectionOptions;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use Spatie\Dropbox\Client as DropboxClient;

/**
 * The BackendFactory class.
 *
 * BackendFactory is responsible for the instantiation of backend adapters.
 */
class BackendFactory
{
    /**
     * An array of instantiated backed file systems.
     *
     * @var array
     */
    protected $backends = [];

    /**
     * Registered adapter types.
     *
     * @var array
     */
    protected $registeredAdapters = [];

    /**
     * The list of operations that should be tracked for a given backend type.
     *
     * @var array
     */
    protected static $trackedOperations = [
        's3' => ['RenameFolder'],
    ];

    /**
     * The CKFinder application container.
     *
     * @var CKFinder
     */
    protected $app;

    /**
     * Access Control Lists.
     *
     * @var AclInterface
     */
    protected $acl;

    /**
     * Configuration.
     *
     * @var Config
     */
    protected $config;

    /**
     * Constructor.
     */
    public function __construct(CKFinder $app)
    {
        $this->app = $app;
        $this->acl = $app['acl'];
        $this->config = $app['config'];

        $this->registerDefaultAdapters();
    }

    public function registerAdapter(string $adapterName, callable $instantiationCallback)
    {
        $this->registeredAdapters[$adapterName] = $instantiationCallback;
    }

    /**
     * Creates a backend file system.
     */
    public function createBackend(array $backendConfig, FilesystemAdapter $adapter, array $filesystemConfig = []): Backend
    {
        if ($adapter instanceof ContainerAwareInterface) {
            $adapter->setContainer($this->app);
        }

        if (\array_key_exists($backendConfig['adapter'], static::$trackedOperations)) {
            $backendConfig['trackedOperations'] = static::$trackedOperations[$backendConfig['adapter']];
        }

        return new Backend($backendConfig, $this->app, $adapter, $filesystemConfig);
    }

    /**
     * Returns the backend object by name.
     *
     * @throws CKFinderException
     * @throws InvalidArgumentException
     */
    public function getBackend(string $backendName): Backend
    {
        if (isset($this->backends[$backendName])) {
            return $this->backends[$backendName];
        }

        $backendConfig = $this->config->getBackendNode($backendName);
        $adapterName = $backendConfig['adapter'];

        if (!isset($this->registeredAdapters[$adapterName])) {
            throw new InvalidArgumentException(sprintf('Backends adapter "%s" not found. Please check configuration file.', $adapterName));
        }

        if (!\is_callable($this->registeredAdapters[$adapterName])) {
            throw new InvalidArgumentException(sprintf('Backend instantiation callback for adapter "%s" is not a callable.', $adapterName));
        }

        $backend = \call_user_func($this->registeredAdapters[$adapterName], $backendConfig);

        if (!$backend instanceof Backend) {
            throw new CKFinderException(sprintf('The instantiation callback for adapter "%s" didn\'t return a valid Backend object.', $adapterName));
        }

        $this->backends[$backendName] = $backend;

        return $backend;
    }

    /**
     * Returns the backend object for a given private directory identifier.
     *
     * @param string $privateDirIdentifier
     *
     * @return Backend
     *
     * @throws FilesystemException
     * @throws CKFinderException
     */
    public function getPrivateDirBackend($privateDirIdentifier)
    {
        $privateDirConfig = $this->config->get('privateDir');

        if (!\array_key_exists($privateDirIdentifier, $privateDirConfig)) {
            throw new InvalidArgumentException(sprintf('Private dir with identifier %s not found. Please check configuration file.', $privateDirIdentifier));
        }

        $privateDir = $privateDirConfig[$privateDirIdentifier];

        $backend = null;

        if (\is_array($privateDir) && \array_key_exists('backend', $privateDir)) {
            $backend = $this->getBackend($privateDir['backend']);
        } else {
            $backend = $this->getBackend($privateDirConfig['backend']);
        }

        // Create a default .htaccess to disable access to current private directory
        $privateDirPath = $this->config->getPrivateDirPath($privateDirIdentifier);
        $htaccessPath = Path::combine($privateDirPath, '.htaccess');
        if (!$backend->has($htaccessPath)) {
            $backend->write($htaccessPath, "Order Deny,Allow\nDeny from all\n");
        }

        return $backend;
    }

    protected function registerDefaultAdapters()
    {
        $this->registerAdapter('local', function ($backendConfig) {
            return $this->createBackend($backendConfig, new Local($backendConfig));
        });

        $this->registerAdapter('ftp', function ($backendConfig) {
            $config = FtpConnectionOptions::fromArray([
                'host' => $backendConfig['host'],
                'root' => $backendConfig['root'] ?? '',
                'username' => $backendConfig['username'],
                'password' => $backendConfig['password'],
                'port' => $backendConfig['port'] ?? 21,
                'ssl' => $backendConfig['ssl'] ?? false,
                'timeout' => $backendConfig['timeout'] ?? 90,
                'utf8' => $backendConfig['utf8'] ?? false,
                'passive' => $backendConfig['passive'] ?? true,
                'transferMode' => $backendConfig['transferMode'] ?? FTP_BINARY,
                'systemType' => $backendConfig['systemType'] ?? null,
                'ignorePassiveAddress' => $backendConfig['ignorePassiveAddress'] ?? null,
                'timestampsOnUnixListingsEnabled' => $backendConfig['timestampsOnUnixListingsEnabled'] ?? false,
                'recurseManually' => $backendConfig['recurseManually'] ?? true,
            ]);

            return $this->createBackend($backendConfig, new FtpAdapter($config));
        });

        $this->registerAdapter('dropbox', function ($backendConfig) {
            $tokenManager = new DropboxTokenManager(
                $backendConfig['appKey'],
                $backendConfig['appSecret'],
                $backendConfig['accessCode'],
                $this->app['cache'],
            );

            $client = new DropboxClient($tokenManager);

            return $this->createBackend($backendConfig, new DropboxAdapter($client, $backendConfig));
        });

        $this->registerAdapter('s3', function ($backendConfig) {
            $clientConfig = [
                'credentials' => [
                    'key' => $backendConfig['key'],
                    'secret' => $backendConfig['secret'],
                ],
                'signature_version' => $backendConfig['signature'] ?? 'v4',
                'version' => $backendConfig['version'] ?? 'latest',
            ];

            if (isset($backendConfig['region'])) {
                $clientConfig['region'] = $backendConfig['region'];
            }

            $client = new S3Client($clientConfig);

            $filesystemConfig = [
                'visibility' => $backendConfig['visibility'] ?? 'private',
            ];

            $prefix = isset($backendConfig['root']) ? trim($backendConfig['root'], '/ ') : null;

            return $this->createBackend($backendConfig, new AwsS3($client, $backendConfig['bucket'], $prefix), $filesystemConfig);
        });

        $this->registerAdapter('azure', function ($backendConfig) {
            $endpoint = sprintf('DefaultEndpointsProtocol=https;AccountName=%s;AccountKey=%s', $backendConfig['account'], $backendConfig['key']);
            $blobRestProxy = BlobRestProxy::createBlobService($endpoint);

            $prefix = isset($backendConfig['root']) ? trim($backendConfig['root'], '/ ') : null;

            return $this->createBackend($backendConfig, new Azure($blobRestProxy, $backendConfig['container'], $prefix));
        });
    }
}
