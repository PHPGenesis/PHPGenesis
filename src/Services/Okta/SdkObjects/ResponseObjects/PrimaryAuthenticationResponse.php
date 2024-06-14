<?php

/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects\ResponseObjects;

use DateTime;
use EncoreDigitalGroup\Common\Services\Okta\Objects\Users\User;
use Exception;

class PrimaryAuthenticationResponse
{
    public DateTime $expiresAt;

    public string $status;

    public string $sessionToken;

    public User $user;

    /**
     * @throws Exception
     */
    public function __construct(mixed $clientResponse)
    {
        $this->expiresAt = new DateTime($clientResponse->service->expiresAt);
        $this->status = $clientResponse->service->status;
        $this->sessionToken = $clientResponse->service->sessionToken;

        $user = new User();
        $user->userId = $clientResponse->service->_embedded->user->id;
        $user->login = $clientResponse->service->_embedded->user->profile->login;
        $user->firstName = $clientResponse->service->_embedded->user->profile->firstName;
        $user->lastName = $clientResponse->service->_embedded->user->profile->lastName;
        $user->locale = $clientResponse->service->_embedded->user->profile->locale;
        $user->timezone = $clientResponse->service->_embedded->user->profile->timeZone;

        $this->user = $user;
    }
}
