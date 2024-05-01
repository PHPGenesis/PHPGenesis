<?php

namespace PHPGenesis\Common\Composer\Config;

class Autoload
{
    public ?array $psr4;
    public ?array $psr0;
    public ?array $classmap;
    public ?array $files;
}