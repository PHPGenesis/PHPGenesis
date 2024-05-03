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
    public static function get()
    {
        return new self();
    }
}