<?php

namespace PHPGenesis\Common\Config\Traits;

use PHPGenesis\Common\Composer\Composer;
use PHPGenesis\Common\Exceptions\MissingConfigurationFileException;

trait ConfigUtils
{
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
}