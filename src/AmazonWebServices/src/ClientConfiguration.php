<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\AmazonWebServices;

class ClientConfiguration
{
    public static function get(): array
    {
        $clientCredentials = ClientCredentials::get();
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
