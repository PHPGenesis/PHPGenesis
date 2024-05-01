<?php

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

        $this->logger->pushHandler(new StreamHandler(CommonConfig::basePath() . '/phpgenesis.log', Level::Debug));
    }

    protected function log(Level $level, string $message, ?array $context = []): void
    {
        $this->logger->log($level, $message, $context);
    }


}
