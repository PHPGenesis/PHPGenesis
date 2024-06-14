<?php

/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects\ResponseObjects;

use PHPGenesis\Services\Okta\Objects\Users\User;
use Exception;

class SetUserPasswordResponse
{
    public User $user;

    /**
     * @throws Exception
     */
    public function __construct(mixed $clientResponse)
    {
        $user = new User();
        $user->userId = $clientResponse->service->id;
        $user->login = $clientResponse->service->profile->login;
        $user->status = $clientResponse->service->status;
        $user->firstName = $clientResponse->service->profile->firstName;
        $user->lastName = $clientResponse->service->profile->lastName;
        $user->displayName = $clientResponse->service->profile->displayName;
        $user->locale = $clientResponse->service->profile->locale;
        $user->timezone = $clientResponse->service->profile->timeZone;
        $user->email = $clientResponse->service->profile->email;

        $this->user = $user;
    }
}
