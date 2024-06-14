<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

use Illuminate\Container\Container;
use PHPGenesis\Common\Container\PhpGenesisContainer;

it('Check if Laravel Exists', function () {
    $container = new PhpGenesisContainer();
    expect($container->isLaravel())->toBeFalse()
        ->and($container::getInstance())->toBeInstanceOf(Container::class);
});
