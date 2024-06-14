<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta;

use PHPGenesis\Services\Okta\SdkObjects\ClientResponse;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;

class OktaClient
{
    protected ClientConfiguration $config;

    protected GuzzleClient $client;

    protected int $attempts;

    public function __construct(?ClientConfiguration $config = null)
    {
        $this->config = $this->setConfiguration($config);
        $this->createClient();
    }

    public function setConfiguration(?ClientConfiguration $config = null): ClientConfiguration
    {
        $this->config = $config ?? new ClientConfiguration();

        return $this->config;
    }

    public function getConfiguration(): ClientConfiguration
    {
        return $this->config;
    }

    public function createClient(): void
    {
        $curlHandler = new CurlHandler();
        $stack = HandlerStack::create($curlHandler);
        $this->client = new GuzzleClient([
            'base_uri' => $this->config->getBaseUrl(),
            'handler' => $stack,
        ]);
    }

    public function getClient(): GuzzleClient
    {
        return $this->client;
    }

    public function send(Request $request, int $attemptLimit = 5, int $attempt = 1): ClientResponse
    {
        $this->attempts = $attempt;
        $client = $this->getClient();

        try {
            $res = $client->sendAsync($request)->wait();
        } catch (ClientException $e) {
            if ($attempt <= $attemptLimit) {
                $i = $attempt + 1;

                return $this->send($request, $attemptLimit, $i);
            }

            return $this->processResponse($e->getResponse());
        }

        return $this->processResponse($res);

    }

    protected function processResponse(mixed $res): ClientResponse
    {
        return new ClientResponse($res);
    }
}
