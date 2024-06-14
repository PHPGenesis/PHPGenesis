<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta;

class ClientConfiguration
{
    const DEFAULT_AUTHORIZATION_TYPE = 'SSWS';

    protected string $authorization;

    protected string $authorizationToken;

    protected string $authorizationType;

    protected string $baseUrl;

    public function __construct(?string $baseUrl = null)
    {
        $this->authorizationType = $this->getAuthorizationType();
        $this->authorizationToken = $this->getAuthorizationToken();
        $this->baseUrl = $baseUrl ?? config('encoredigital.okta.credentials.base_url');
    }

    public function getAuthorization(): string
    {
        return $this->getAuthorizationType() . ' ' . $this->getAuthorizationToken();
    }

    public function setAuthorizationType(?string $authorizationType = null): void
    {
        $this->authorizationType = $authorizationType ?? $this->getAuthorizationType();
    }

    public function getAuthorizationType(): string
    {
        return $this->authorizationType ?? self::DEFAULT_AUTHORIZATION_TYPE;
    }

    public function setAuthorizationToken(?string $authorizationToken = null): void
    {
        $this->authorizationToken = $authorizationToken ?? $this->getAuthorizationToken();
    }

    public function getAuthorizationToken(): string
    {
        return $this->authorizationToken ?? config('encoredigital.okta.credentials.authorization_token');
    }

    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }
}
