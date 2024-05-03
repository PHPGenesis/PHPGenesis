<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Services\AmazonWebServices;

class AwsClientCredentials
{
    public static function get(): array
    {
        return [
            'key' => config('encoredigital.aws.credentials.key'),
            'secret' => config('encoredigital.aws.credentials.secret'),
        ];
    }
}
