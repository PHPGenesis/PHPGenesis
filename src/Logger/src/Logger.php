<?php

namespace PHPGenesis\Logger;

class Logger extends BaseLogger implements ILogger
{
    public static function debug(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::DEBUG, $message);
    }

    public static function info(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::INFO, $message);
    }

    public static function notice(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::NOTICE, $message);
    }

    public static function warning(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::WARNING, $message);
    }

    public static function error(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::ERROR, $message);
    }

    public static function critical(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::CRITICAL, $message);
    }

    public static function alert(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::ALERT, $message);
    }

    public static function emergency(string $message): void
    {
        $logger = new Logger();

        $logger->log(LogLevel::EMERGENCY, $message);
    }
}
