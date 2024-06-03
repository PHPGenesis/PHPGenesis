<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Config\Traits;

trait ConfigUtils
{
    public static function get(): self
    {
        return new self();
    }
}
