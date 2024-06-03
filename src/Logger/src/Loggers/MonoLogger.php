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

        unset($logger);
    }

    public static function info(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::INFO, $message, $context);

        unset($logger);
    }

    public static function notice(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::NOTICE, $message, $context);

        unset($logger);
    }

    public static function warning(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::WARNING, $message, $context);

        unset($logger);
    }

    public static function error(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::ERROR, $message, $context);

        unset($logger);
    }

    public static function critical(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::CRITICAL, $message, $context);

        unset($logger);
    }

    public static function alert(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::ALERT, $message, $context);

        unset($logger);
    }

    public static function emergency(string $message, ?array $context = []): void
    {
        $logger = new MonoLogger();

        $logger->log(LogLevel::EMERGENCY, $message, $context);

        unset($logger);
    }

    public static function shareContext(array $context): void
    {
        $logger = new MonoLogger();

        /** @noinspection PhpExpressionResultUnusedInspection */
        $logger->globalContext($context);

        unset($logger);
    }

    public static function withContext(array $context): void
    {
        $logger = new MonoLogger();

        /** @noinspection PhpExpressionResultUnusedInspection */
        $logger->globalContext($context);

        unset($logger);
    }
}
