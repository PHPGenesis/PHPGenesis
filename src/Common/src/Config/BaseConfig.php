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
    public static function applyConfig(?object $config = null): BaseConfig
    {
        throw new NotImplementedException();
    }

    public static function get(): BaseConfig
    {
        try {
            $configFile = json_decode(CommonConfig::getFile());

            return self::applyConfig($configFile);

        } catch (MissingConfigurationFileException $e) {
            return self::applyConfig();

        } catch (NotImplementedException $e) {
            exit(ExitCode::GENERAL_ERROR);
        }
    }
}