<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Composer\Exceptions;

use EncoreDigitalGroup\StdLib\Exceptions\BaseException;
use EncoreDigitalGroup\StdLib\Objects\ExitCode;
use Throwable;

class PackageNotInstalledException extends BaseException
{
    public function __construct()
    {
        parent::__construct('Composer Package Not Installed', ExitCode::RESOURCE_UNAVAILABLE);
    }
}