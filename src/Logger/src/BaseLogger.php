<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Logger;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use PHPGenesis\Common\Config\CommonConfig;

abstract class BaseLogger
{
    public Logger $logger;

    public function __construct()
    {
        $this->logger = new Logger('logger');

        $this->logger->pushHandler(new StreamHandler('phpgenesis.log', Level::Debug));
    }

    protected function log(Level $level, string $message, ?array $context = []): void
    {
        $this->logger->log($level, $message, $context);
    }

    protected function globalContext(array $context): void
    {
        if (isset($_GLOBAL['PHPGENESIS_LOGGER_CONTEXT'])) {
            $_GLOBAL['PHPGENESIS_LOGGER_CONTEXT'] = array_merge($_GLOBAL['PHPGENESIS_LOGGER_CONTEXT'], $context);
        } else {
            $_GLOBAL['PHPGENESIS_LOGGER_CONTEXT'] = $context;
        }


        $_GLOBAL['PHPGENESIS_LOGGER_CONTEXT'];
    }


}
