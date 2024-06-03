<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Composer\Providers;

use PHPGenesis\Common\Composer\Composer;

class Laravel
{
    const PACKAGE_VENDOR = 'laravel';

    public static function installed(string $packageName = 'framework'): bool
    {

        if (Composer::installed(self::PACKAGE_VENDOR . '/' . $packageName)) {
            return true;
        }

        return Composer::installed(self::PACKAGE_VENDOR . '/framework');
    }
}
