<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

use EncoreDigitalGroup\StdLib\Exceptions\ImproperBooleanReturnedException;
use PHPGenesis\Common\Helpers\Objectify;

if (!function_exists('objectify')) {
    /**
     * @throws ImproperBooleanReturnedException
     */
    function objectify($value): stdClass|array
    {
        return Objectify::perform($value);
    }
}