<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Services\AmazonWebServices;

use PHPGenesis\Services\AmazonWebServices\Config\AwsConfig;

class AwsClientConfiguration
{
    public static function get(): array
    {
        $config = AwsConfig::get();

        return [
            'credentials' => [
                'key' => $config->credentials->key,
                'secret' => $config->credentials->secret,
            ],
            'region' => $config->region,
            'version' => $config->region,
        ];
    }
}
