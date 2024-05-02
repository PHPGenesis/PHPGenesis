<?php

namespace PHPGenesis\Common\Config;

interface IModuleConfig
{
    public static function applyConfig(?object $config = null): BaseConfig;

    public static function get(): BaseConfig;
}