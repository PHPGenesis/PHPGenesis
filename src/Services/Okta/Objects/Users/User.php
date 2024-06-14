<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\Objects\Users;

use PHPGenesis\Services\Okta\SdkObjects\RequestObjects\SetUserPasswordRequest;
use PHPGenesis\Services\Okta\SdkObjects\ResponseObjects\SetUserPasswordResponse;
use PHPGenesis\Services\Okta\Traits\HasOktaClient;
use Exception;
use GuzzleHttp\Psr7\Request;

class User
{
    use HasOktaClient;

    public string $userId;

    public ?string $login;

    public ?string $status;

    public ?string $firstName;

    public ?string $lastName;

    public ?string $displayName;

    public ?string $email;

    public ?string $locale;

    public ?string $timezone;

    /**
     * @throws Exception
     */
    public function changePassword(string $newPassword): SetUserPasswordResponse
    {
        $headers = $this->buildHeaders();

        $requestBody = (new SetUserPasswordRequest($newPassword))->requestBody;

        $request = new Request('POST', '/users/' . $this->userId . '/credentials/change_password', $headers, $requestBody);

        $response = $this->client?->send($request);

        return new SetUserPasswordResponse($response);
    }
}
