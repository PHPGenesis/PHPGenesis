<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Services\AmazonWebServices\Config;

use PHPGenesis\Common\Composer\Providers\Laravel;
use PHPGenesis\Common\Config\BaseConfig;
use PHPGenesis\Common\Config\IModuleConfig;
use stdClass;

class AwsConfig extends BaseConfig implements IModuleConfig
{
    const CONFIG_CREDENTIALS_KEY = 'phpgenesis.amazonWebServices.credentials.key';
    const CONFIG_CREDENTIALS_SECRET = 'phpgenesis.amazonWebServices.credentials.secret';

    public ?object $credentials = null;

    public function __construct()
    {
        $this->credentials = new stdClass();
        $this->credentials->key = null;
        $this->credentials->secret = null;
    }

    public static function applyConfig(?object $config = null): AwsConfig
    {
        if (is_null($config)) {
            return new AwsConfig();
        }

        $aws = new AwsConfig();
        $aws->credentials->key = $aws->resolveCredentialsKey($config);
        $aws->credentials->secret = $aws->resolveCredentialsSecret($config);

        return $aws;
    }

    public static function get(string $key = 'amazonWebServices'): AwsConfig
    {
        $key = 'amazonWebServices';
        return (new AwsConfig())->applyConfig(parent::get($key));
    }

    private function resolveCredentialsKey(object $config): string
    {
        if (Laravel::installed('foundation')) {
            return config(self::CONFIG_CREDENTIALS_KEY);
        }

        return $config->credentials->key;
    }

    private function resolveCredentialsSecret(object $config): string
    {
        if (Laravel::installed('foundation')) {
            return config(self::CONFIG_CREDENTIALS_SECRET);
        }

        return $config->credentials->secret;
    }
}