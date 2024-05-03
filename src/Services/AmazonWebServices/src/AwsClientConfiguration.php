<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Services\AmazonWebServices;

class AwsClientConfiguration
{
    public static function get(): array
    {
        $clientCredentials = AwsClientCredentials::get();
        $region = config('encoredigital.aws.region');
        $version = config('encoredigital.aws.version');

        return [
            'credentials' => [
                'key' => $clientCredentials['key'],
                'secret' => $clientCredentials['secret'],
            ],
            'region' => $region,
            'version' => $version,
        ];
    }
}
