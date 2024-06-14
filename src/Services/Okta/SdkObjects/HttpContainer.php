<?php
/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects;

class HttpContainer
{
    public ?int $statusCode;

    public string $message;

    public string $service;

    public int $attempts;
}
