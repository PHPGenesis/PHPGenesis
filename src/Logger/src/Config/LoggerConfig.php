<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Logger\Config;

use PHPGenesis\Common\Config\BaseConfig;
use PHPGenesis\Common\Config\CommonConfig;
use PHPGenesis\Common\Config\IModuleConfig;

class LoggerConfig extends BaseConfig implements IModuleConfig
{
    public string $name = 'phpgenesis';
    public string $logFileName;
    public string $logLevel = 'debug';

    public function __construct()
    {
        $this->logFileName = CommonConfig::basePath('/phpgenesis.log');
    }

    public static function applyConfig(?object $config = null): LoggerConfig
    {
        if (is_null($config)) {
            return new LoggerConfig();
        }

        $logger = new LoggerConfig();
        $logger->name = $config->logger->name;
        $logger->logFileName = CommonConfig::basePath('/' . $config->logger->logFileName);

        return $logger;
    }

    public static function get(string $key = 'logger'): LoggerConfig
    {
        $key = 'logger';
        return (new LoggerConfig())->applyConfig(parent::get($key));
    }
}