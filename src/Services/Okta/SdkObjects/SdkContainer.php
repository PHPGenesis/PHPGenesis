<?php
/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace PHPGenesis\Services\Okta\SdkObjects;

class SdkContainer
{
    public OutcomeContainer $outcome;

    public PageContainer $page;

    public function __construct()
    {
        $this->outcome = new OutcomeContainer();
        $this->page = new PageContainer();
    }
}
