<?php

namespace PHPGenesis\Logger\Config;

use PHPGenesis\Common\Config\CommonConfig;
use PHPGenesis\Common\Config\Packages;
use PHPGenesis\Common\Exceptions\MissingConfigurationFileException;

class LoggerConfig
{
    const PACKAGE_NAME = Packages::Logger->value;

    public string $name = 'phpgenesis';
    public string $logFileName;
    public string $logLevel = 'debug';

    public function __construct()
    {
        $this->logFileName = CommonConfig::basePath('/phpgenesis.log');
    }

    public static function applyConfig(?object $config = null): LoggerConfig
    {
        if(is_null($config)) {
            return new LoggerConfig();
        }

        $logger = new LoggerConfig();
        $logger->name = $config->name;
        $logger->logFileName = CommonConfig::basePath('/' . $config->logFileName);

        return $logger;
    }

    public static function get(): LoggerConfig
    {
        try {
            $configFile = json_decode(CommonConfig::getFile());

            return self::applyConfig($configFile);

        } catch (MissingConfigurationFileException $e) {
            return self::applyConfig();
        }
    }
}