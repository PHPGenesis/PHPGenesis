<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\AmazonWebServices\SimpleEmailService;

use Aws\Exception\AwsException;
use Aws\Ses\SesClient;
use PHPGenesis\AmazonWebServices\ClientConfiguration;

class Domain
{
    public string $domain;

    public static function getSesClient(): SesClient
    {
        return new SesClient(ClientConfiguration::get());
    }

    public function verifyDomainIdentity()
    {
        $SesClient = self::getSesClient();
        try {
            return $SesClient->verifyDomainIdentity([
                'Domain' => $this->domain,
            ]);
        } catch (AwsException $e) {
            return $e->getMessage();
        }
    }

    public function verifyDomainDkim(): array|string
    {
        $SesClient = self::getSesClient();
        try {
            $Result = $SesClient->verifyDomainDkim([
                'Domain' => $this->domain,
            ]);

            return json_decode(json_encode($Result['DkimTokens']));
        } catch (AwsException $e) {
            return $e->getMessage();
        }
    }
}
