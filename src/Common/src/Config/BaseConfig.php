<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Config;

use EncoreDigitalGroup\StdLib\Exceptions\NotImplementedException;
use PHPGenesis\Common\Config\Traits\ConfigUtils;
use PHPGenesis\Common\Exceptions\MissingConfigurationFileException;

class BaseConfig implements IModuleConfig
{
    use ConfigUtils;

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
    public static function get(string $key = 'common'): BaseConfig
    {
        try {
            $configFile = json_decode(CommonConfig::getFile());
            return CommonConfig::getConfigKey($key, $configFile);

        } catch (MissingConfigurationFileException $e) {
            return self::applyConfig();
        }
    }
}