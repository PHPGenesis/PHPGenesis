<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Config;

use EncoreDigitalGroup\StdLib\Exceptions\NotImplementedException;
use EncoreDigitalGroup\StdLib\Objects\ExitCode;
use PHPGenesis\Common\Exceptions\MissingConfigurationFileException;

class BaseConfig implements IModuleConfig
{
    /**
     * @throws NotImplementedException
     */
    public static function applyConfig(?object $config = null): BaseConfig
    {
        throw new NotImplementedException();
    }

    /**
     * @throws NotImplementedException
     */
    public static function get(): BaseConfig
    {
        try {
            return json_decode(CommonConfig::getFile());

        } catch (MissingConfigurationFileException $e) {
            return self::applyConfig();
        }
    }
}