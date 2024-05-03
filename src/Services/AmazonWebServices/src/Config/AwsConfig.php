<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Services\AmazonWebServices\Config;

use PHPGenesis\Common\Config\IModuleConfig;
use PHPGenesis\Common\Config\Traits\ConfigUtils;
use stdClass;

class AwsConfig implements IModuleConfig
{
    use ConfigUtils;

    const string CONFIG_CREDENTIALS_KEY = 'phpgenesis.amazonWebServices.credentials.key';
    const string CONFIG_CREDENTIALS_SECRET = 'phpgenesis.amazonWebServices.credentials.secret';

    public ?object $credentials = null;
    public string $region = 'us-east-1';
    public string $version = '2010-12-01';

    public function __construct()
    {
        $this->credentials = new stdClass();
        $this->credentials->key = config(self::CONFIG_CREDENTIALS_KEY);
        $this->credentials->secret = config(self::CONFIG_CREDENTIALS_SECRET);
    }
}