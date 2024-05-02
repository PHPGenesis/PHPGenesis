<?php

namespace PHPGenesis\AmazonWebServices\Config;

use PHPGenesis\Common\Composer\Providers\Laravel;
use PHPGenesis\Common\Config\BaseConfig;
use PHPGenesis\Common\Config\IModuleConfig;
use PHPGenesis\Common\Config\Packages;
use stdClass;

class AwsConfig extends BaseConfig implements IModuleConfig
{
    const PACKAGE_NAME = Packages::AWS->value;

    public ?object $credentials = null;

    public function __construct()
    {
        $this->credentials = new stdClass();
        $this->credentials->key = null;
        $this->credentials->secret = null;
    }

    public static function applyConfig(?object $config = null): AwsConfig
    {
        if(is_null($config)) {
            return new AwsConfig();
        }

        $aws = new AwsConfig();
        $aws->credentials->key = $aws->resolveCredentialsKey($config);
        $aws->credentials->secret = $aws->resolveCredentialsSecret($config);

        return $aws;
    }

    private function resolveCredentialsKey(object $config): string
    {
        if (Laravel::installed()) {
            return config('phpgenesis.amazonWebServices.credentials.key');
        }

        return $config->amazonWebServices->credentials->key;
    }

    private function resolveCredentialsSecret(object $config): string
    {
        if (Laravel::installed('foundation')) {
            return config('phpgenesis.amazonWebServices.credentials.secret');
        }

        return $config->amazonWebServices->credentials->secret;
    }
}