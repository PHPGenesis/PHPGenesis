<?php

namespace PHPGenesis\Common\Composer;

use Composer\InstalledVersions;
use PHPGenesis\Common\Config\CommonConfig;

class Composer
{
    public static function installed(string $packageName): bool
    {
        return InstalledVersions::isInstalled($packageName);
    }

    public static function installPath(): ?string
    {
        return InstalledVersions::getInstallPath(CommonConfig::PACKAGE_NAME);
    }
}