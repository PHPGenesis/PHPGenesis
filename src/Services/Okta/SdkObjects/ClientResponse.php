<?php
/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects;

use stdClass;

class ClientResponse
{
    public SdkContainer $sdk;

    public object $service;

    public function __construct(mixed $clientResponse)
    {
        $responseBody = $clientResponse->getBody()->getContents();
        $httpStatusCode = $clientResponse->getStatusCode();
        $httpMessage = $clientResponse->getReasonPhrase();

        if ($httpStatusCode >= 200 && $httpStatusCode < 300) {
            $success = true;
        }

        if ($httpStatusCode == 429) {
            $rateLimited = true;
        }

        $this->sdk = new SdkContainer();
        $this->sdk->outcome->success = $success ?? false;
        $this->sdk->outcome->rateLimited = $rateLimited ?? false;
        $this->sdk->outcome->http->statusCode = $httpStatusCode ?? null;
        $this->sdk->outcome->http->message = $httpMessage ?? null;
        $this->sdk->outcome->http->service = $responseBody;
        $this->sdk->outcome->http->attempts = $this->attempts ?? 1;
        $this->service = new stdClass();

        if ($success ?? false) {
            $responseBody = json_decode($responseBody);
            $this->service = $responseBody;
            $this->sdk->page->previous = $responseBody->meta->prev->offset ?? null;
            $this->sdk->page->next = $responseBody->meta->next->offset ?? null;
        }
    }
}
