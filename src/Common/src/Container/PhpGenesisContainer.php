<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Container;

use Illuminate\Container\Container as IlluminateContainer;
use Illuminate\Foundation\Application;

/** @experimental */
class PhpGenesisContainer extends IlluminateContainer
{
    public function __construct()
    {
        if (!$this->isLaravel()) {
            // Create a new instance of the Illuminate container
            $container = new IlluminateContainer();
            static::setInstance($container);
        }

    }

    public function isLaravel(): bool
    {
        return class_exists(Application::class);
    }
}
