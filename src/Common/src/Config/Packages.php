<?php

namespace PHPGenesis\Common\Config;

enum Packages: string
{
    case Common = 'phpgenesis/common';
    case CLI = 'phpgenesis/cli';
    case Logger = 'phpgenesis/logger';
    case PHPGenesis = 'phpgenesis/phpgenesis';
}