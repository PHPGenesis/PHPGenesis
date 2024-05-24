<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Logger;

use Exception;

/** @experimental */
class ExceptionLogger
{
    public static function debug(Exception $exception, string $message, array $context): void
    {
        $loggerMessage = 'Exception: {exception.message}. ' . $message;
        $loggerContext = [
            'exception' => $exception,
            'exception.message' => $exception->getMessage(),
            'exception.code' => $exception->getCode(),
            'exception.file' => $exception->getFile(),
            'exception.line' => $exception->getLine(),
        ];

        $loggerContext = array_merge($loggerContext, $context);

        Logger::info($loggerMessage, $loggerContext);
    }
}