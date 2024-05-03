<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Config;

use EncoreDigitalGroup\StdLib\Exceptions\NotImplementedException;
use PHPGenesis\Common\Composer\Composer;
use PHPGenesis\Common\Composer\Exceptions\PackageNotInstalledException;
use PHPGenesis\Logger\Config\LoggerConfig;
use PHPGenesis\Services\AmazonWebServices\Config\AwsConfig;

class CommonConfig extends BaseConfig implements IModuleConfig
{
    const FILE_NAME = PhpGenesisConfig::FILE_NAME;
    const PACKAGE_NAME = Packages::Common->value;
    const GLOBAL_PACKAGE_NAME = Packages::PHPGenesis->value;

    /**
     * @throws NotImplementedException
     * @throws PackageNotInstalledException
     */
    public static function aws(): BaseConfig
    {
        if (Composer::installed(str_enum_val(Packages::AWS))) {
            return AwsConfig::get();
        }

        throw new PackageNotInstalledException();
    }

    /**
     * @throws NotImplementedException
     * @throws PackageNotInstalledException
     */
    public static function logger(): LoggerConfig
    {
        if (Composer::installed(str_enum_val(Packages::Logger))) {
            return LoggerConfig::get();
        }

        throw new PackageNotInstalledException();
    }
}