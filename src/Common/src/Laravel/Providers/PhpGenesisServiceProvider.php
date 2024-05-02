<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Laravel\Providers;

use Illuminate\Support\ServiceProvider;

class PhpGenesisServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../Config/phpgenesis.php' => config_path('phpgenesis.php'),
        ]);
    }
}