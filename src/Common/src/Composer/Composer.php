<?php

namespace PHPGenesis\Common\Composer;

use Composer\InstalledVersions;
use PHPGenesis\Common\Config\CommonConfig;

class Composer
{
    public static function installed(string $packageName, bool $global = false): bool
    {
        if ($global) {
            if (
                InstalledVersions::isInstalled($packageName)
                || InstalledVersions::isInstalled(CommonConfig::GLOBAL_PACKAGE_NAME)
            ) {
                return true;
            }

            return false;
        }

        return InstalledVersions::isInstalled($packageName);
    }

    public static function installPath(): ?string
    {
        return InstalledVersions::getInstallPath(CommonConfig::PACKAGE_NAME);
    }
}