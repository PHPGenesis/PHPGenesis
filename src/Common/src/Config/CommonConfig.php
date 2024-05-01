<?php

namespace PHPGenesis\Common\Config;

use PHPGenesis\Common\Composer\Composer;
use PHPGenesis\Common\Composer\Exceptions\PackageNotInstalledException;
use PHPGenesis\Common\Config\Traits\ConfigUtils;
use PHPGenesis\Logger\Config\LoggerConfig;

class CommonConfig
{
    use ConfigUtils;

    const FILE_NAME = PhpGenesisConfig::FILE_NAME;
    const PACKAGE_NAME = Packages::Common->value;
    const GLOBAL_PACKAGE_NAME = Packages::PHPGenesis->value;

    public static function logger(): LoggerConfig
    {
        if (Composer::installed(str_enum_val(Packages::Logger))) {
            return LoggerConfig::get();
        }

        throw new PackageNotInstalledException();
    }
}