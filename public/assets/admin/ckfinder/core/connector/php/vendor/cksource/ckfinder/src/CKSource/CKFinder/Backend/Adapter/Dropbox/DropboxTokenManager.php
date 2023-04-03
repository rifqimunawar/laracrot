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

namespace CKSource\CKFinder\Backend\Adapter\Dropbox;

use CKSource\CKFinder\Cache\CacheManager;
use CKSource\CKFinder\Exception\InvalidConfigException;
use DateTime;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Spatie\Dropbox\RefreshableTokenProvider;
use Spatie\Dropbox\TokenProvider;

class DropboxTokenManager implements TokenProvider, RefreshableTokenProvider
{
    private Client $client;

    private string $appKey;

    private string $secretKey;

    private string $accessCode;

    private CacheManager $cache;

    public function __construct(string $appKey, string $secretKey, string $accessCode, CacheManager $cache)
    {
        $this->client = new Client(
            [
                'base_uri' => 'https://api.dropbox.com/oauth2/',
            ]
        );

        $this->appKey = $appKey;
        $this->secretKey = $secretKey;
        $this->accessCode = $accessCode;
        $this->cache = $cache;
    }

    /**
     * Returns dropbox access token from file.
     *
     * @throws \Exception
     * @throws GuzzleException
     */
    public function getToken(): string
    {
        $token = $this->cache->get('dropbox/'.$this->appKey.'/access_token');
        if (!empty($token) && !$this->isAccessTokenExpired()) {
            return $token;
        }

        return '';
    }

    /**
     * Generates refresh token and access token with expiration time.
     *
     * @throws GuzzleException
     * @throws InvalidConfigException
     */
    public function refresh(ClientException $exception): bool
    {
        $params = http_build_query([
            'refresh_token' => $this->cache->get('dropbox/'.$this->appKey.'/refresh_token') ?? ' ',
            'grant_type' => 'refresh_token',
            'client_id' => $this->appKey,
            'client_secret' => $this->secretKey,
        ]);

        try {
            $response = $this->client->post(
                uri: 'token?'.$params,
            );
        } catch (ClientException $e) {
            $this->deleteTokensFromCache();
            $this->generateRefreshToken();

            return true;
        }

        $json = $response->getBody()->getContents();

        $arrayResponse = json_decode($json, true);

        $this->saveTokensInCache([
            'accessToken' => $arrayResponse['access_token'],
            'accessTokenExpirationTime' => $arrayResponse['expires_in'],
        ]);

        return true;
    }

    private function generateRefreshToken(): void
    {
        $params = http_build_query([
            'code' => $this->accessCode,
            'grant_type' => 'authorization_code',
        ]);

        try {
            $response = $this->client->post(
                uri: 'token?'.$params,
                options: [
                    'auth' => [
                        $this->appKey,
                        $this->secretKey,
                    ],
                ]
            );
        } catch (ClientException $e) {
            throw new InvalidConfigException('Access Code is incorrect or expired', [$e->getResponse()->getBody()], previous: $e);
        }

        $json = $response->getBody()->getContents();

        $arrayResponse = json_decode($json, true);

        $this->saveTokensInCache([
            'accessToken' => $arrayResponse['access_token'],
            'accessTokenExpirationTime' => $arrayResponse['expires_in'],
            'refreshToken' => $arrayResponse['refresh_token'],
        ]);
    }

    /**
     * Checks if dropbox access token is expired.
     *
     * @throws Exception
     */
    private function isAccessTokenExpired(): bool
    {
        $expirationDate = new DateTime($this->cache->get('dropbox/'.$this->appKey.'/access_token_expiration_date'));
        $now = new DateTime();

        return $expirationDate < $now;
    }

    /**
     * Saves refresh token and access token with expiration date in file.
     */
    private function saveTokensInCache(array $tokenData): void
    {
        $expirationTimeInMinutes = $tokenData['accessTokenExpirationTime'] / 60;
        $expirationDate = new DateTime();
        $expirationDate->modify('+'.($expirationTimeInMinutes - 10).' minutes');

        $this->cache->set('dropbox/'.$this->appKey.'/access_token', $tokenData['accessToken']);
        $this->cache->set('dropbox/'.$this->appKey.'/access_token_expiration_date', $expirationDate->format('Y-m-d H:i:s'));

        if (!empty($tokenData['refreshToken'])) {
            $this->cache->set('dropbox/'.$this->appKey.'/refresh_token', $tokenData['refreshToken']);
        }
    }

    /**
     * Deletes cache files with dropbox tokens.
     */
    private function deleteTokensFromCache(): void
    {
        $this->cache->delete('dropbox/'.$this->appKey.'/access_token');
        $this->cache->delete('dropbox/'.$this->appKey.'/access_token_expiration_date');
        $this->cache->delete('dropbox/'.$this->appKey.'/refresh_token');
    }
}
