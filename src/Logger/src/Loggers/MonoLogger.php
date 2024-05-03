<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Logger\Loggers;

use PHPGenesis\Logger\BaseLogger;
use PHPGenesis\Logger\ILogger;
use PHPGenesis\Logger\LogLevel;

/**
 * @api
 * @internal This class is not meant to be used by developers outside of the PHPGenesis\Logger namespace.
 */
class MonoLogger extends BaseLogger implements ILogger
{
    public static function debug(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::DEBUG, $message, $context);
    }

    public static function info(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::INFO, $message, $context);
    }

    public static function notice(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::NOTICE, $message, $context);
    }

    public static function warning(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::WARNING, $message, $context);
    }

    public static function error(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::ERROR, $message, $context);
    }

    public static function critical(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::CRITICAL, $message, $context);
    }

    public static function alert(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::ALERT, $message, $context);
    }

    public static function emergency(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::EMERGENCY, $message, $context);
    }
}
