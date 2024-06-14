<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Http;

use Illuminate\Support\Facades\Facade;

/** @experimental */
class HttpClient extends Facade
{
    protected static function getFacadeAccessor(): mixed
    {
        return 'http';
    }
}
