<?php

/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects\RequestObjects;

use RuntimeException;
use stdClass;

class SetUserPasswordRequest
{
    public string $requestBody;

    public function __construct(string $newPassword)
    {
        $requestBody = new stdClass();
        $requestBody->credentials = new stdClass();
        $requestBody->credentials->password = new stdClass();
        $requestBody->credentials->password->value = $newPassword;

        $encoded = json_encode($requestBody);
        if ($encoded === false) {
            throw new RuntimeException('Failed to JSON Encode Request Body');
        }

        $this->requestBody = $encoded;
    }
}
