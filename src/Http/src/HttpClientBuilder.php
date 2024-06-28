<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Http;

use Illuminate\Http\Client\Factory as HttpFactory;
use Illuminate\Support\Facades\Http as HttpFacade;
use PHPGenesis\Common\Container\PhpGenesisContainer;

/** @experimental */
class HttpClientBuilder
{
    protected PhpGenesisContainer $container;

    public function __construct()
    {
        $this->container = PhpGenesisContainer::getInstance();
        $this->setupHttpFacade();
    }

    protected function setupHttpFacade(): HttpFacade|HttpFactory
    {
        if ($this->container->isLaravel()) {
            // Use Laravel's existing Http facade
            return HttpFacade::getFacadeRoot();
        }

        // Set up a new container and Http facade
        $clientFactory = new HttpFactory();

        // Bind the HTTP Factory to the container
        $this->container->getInstance()->singleton('http', function () use ($clientFactory) {
            return $clientFactory;
        });

        // Alias the Http facade to the HTTP Factory
        HttpFacade::setFacadeApplication(null);
        HttpFacade::resolved(function ($httpFactory): void {
            HttpFacade::swap($httpFactory);
        });

        return $clientFactory;
    }
}
