<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\Objects\Users;

use PHPGenesis\Services\Okta\SdkObjects\RequestObjects\PrimaryAuthenticationRequest;
use PHPGenesis\Services\Okta\SdkObjects\ResponseObjects\PrimaryAuthenticationResponse;
use PHPGenesis\Services\Okta\Traits\HasOktaClient;
use Exception;
use GuzzleHttp\Psr7\Request;

/**
 * @api
 */
class UserAuthentication
{
    use HasOktaClient;

    protected string $username;

    protected string $password;

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @throws Exception
     */
    public function login(): PrimaryAuthenticationResponse
    {
        $headers = $this->buildHeaders();

        $requestBody = (new PrimaryAuthenticationRequest($this->username, $this->password))->requestBody;

        $request = new Request('POST', '/api/v1/authn', $headers, $requestBody);

        $response = $this->client?->send($request);

        return new PrimaryAuthenticationResponse($response);
    }
}
