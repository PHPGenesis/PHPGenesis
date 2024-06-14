<?php
/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\Traits;

use PHPGenesis\Services\Okta\ClientConfiguration;
use PHPGenesis\Services\Okta\OktaClient;

/**
 * @api
 */
trait HasOktaClient
{
    protected ?ClientConfiguration $config;

    protected ?OktaClient $client;

    public function __construct()
    {
        $this->client = new OktaClient();
        $this->config = new ClientConfiguration();
    }

    private function buildHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => $this->config?->getAuthorization(),
        ];
    }
}
