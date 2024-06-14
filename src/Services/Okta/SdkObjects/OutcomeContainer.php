<?php
/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects;

class OutcomeContainer
{
    public bool $success;

    public bool $rateLimited;

    public HttpContainer $http;

    public function __construct()
    {
        $this->http = new HttpContainer();
    }
}
