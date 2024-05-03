<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Services\AmazonWebServices;

use EncoreDigitalGroup\StdLib\Exceptions\NotImplementedException;
use PHPGenesis\Services\AmazonWebServices\Config\AwsConfig;

class AwsClientCredentials
{
    public ?string $key;
    public ?string $secret;

    public static function get(): AwsClientCredentials
    {
        $awsClientCredentials = new self();
        $awsClientCredentials->key = AwsConfig::get()->credentials->key;
        $awsClientCredentials->secret = AwsConfig::get()->credentials->secret;

        return $awsClientCredentials;
    }
}
