<?php

namespace PHPGenesis\Logger;

class Logger extends BaseLogger implements ILogger
{
    public static function debug(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::DEBUG, $message, $context);
    }

    public static function info(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::INFO, $message, $context);
    }

    public static function notice(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::NOTICE, $message, $context);
    }

    public static function warning(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::WARNING, $message, $context);
    }

    public static function error(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::ERROR, $message, $context);
    }

    public static function critical(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::CRITICAL, $message, $context);
    }

    public static function alert(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::ALERT, $message, $context);
    }

    public static function emergency(string $message, ?array $context = []): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::EMERGENCY, $message, $context);
    }
}
