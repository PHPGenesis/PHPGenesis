<?php

/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects\RequestObjects;

use RuntimeException;
use stdClass;

class PrimaryAuthenticationRequest
{
    public string $requestBody;

    public function __construct(string $username, string $password)
    {
        $requestBody = new stdClass();
        $requestBody->username = $username;
        $requestBody->password = $password;
        $requestBody->options = new stdClass();
        $requestBody->options->multiOptionalFactorEnroll = false;
        $requestBody->options->warnBeforePasswordExpired = false;

        $encoded = json_encode($requestBody);
        if ($encoded === false) {
            throw new RuntimeException('Failed to JSON Encode Request Body');
        }

        $this->requestBody = $encoded;
    }
}
