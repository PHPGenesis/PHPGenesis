<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Config\Traits;

use Exception;
use LogicException;
use PHPGenesis\Common\Composer\Composer;
use PHPGenesis\Common\Exceptions\MissingConfigurationFileException;

trait ConfigUtils
{
    public static function basePath(?string $pathToFile = null): string
    {
        $installPath = Composer::installPath() . '/../../..';

        return $installPath . $pathToFile;
    }

    /**
     * @throws MissingConfigurationFileException
     */
    public static function getFile(): string
    {
        $basePath = self::basePath();

        $configFile = file_get_contents($basePath . self::FILE_NAME);

        if (!$configFile) {
            throw new MissingConfigurationFileException();
        }

        return $configFile;
    }

    public static function getConfigKey(string $needle, object $haystack): object
    {
        try {
            return $haystack->$needle;
        } catch (Exception $e) {
            throw new LogicException(str_concat_space($needle, 'is not a valid key in the provided object'));
        }
    }
}