<?php

namespace PHPGenesis\Common\Config;

use PHPGenesis\Common\Composer\Composer;
use PHPGenesis\Common\Composer\Exceptions\PackageNotInstalledException;
use PHPGenesis\Common\Exceptions\MissingConfigurationFileException;
use PHPGenesis\Logger\Config\LoggerConfig;

class CommonConfig
{
    const FILE_NAME = '/phpgenesis.json';
    const PACKAGE_NAME = 'phpgenesis/common';

    public static function basePath(?string $pathToFile = null): string
    {
        $installPath = Composer::installPath() . '/../../..';

        return $installPath . $pathToFile;
    }

    public static function getFile(): string
    {
        $basePath = self::basePath();

        $configFile = file_get_contents($basePath . self::FILE_NAME);

        if(!$configFile) {
            throw new MissingConfigurationFileException();
        }

        return $configFile;
    }

    public static function logger()
    {
        if(Composer::installed(LoggerConfig::PACKAGE_NAME)) {
            return LoggerConfig::get();
        }

        throw new PackageNotInstalledException();
    }
}