<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Composer;

use Composer\Script\Event;
use PHPGenesis\Common\Helpers\IdeHelper;

class Scripts
{
    public static function postAutoloadDump(Event $event): void
    {
        require_once $event->getComposer()->getConfig()->get('vendor-dir') . '/autoload.php';
        $packageName = $event->getComposer()->getPackage()->getName();

        $isPhpGenesis = false;

        if ($packageName = 'phpgenesis/phpgenesis') {
            $isPhpGenesis = true;
            echo 'Package is PHPGenesis Monorepo. Modifying IdeHelper::updateEditorConfig() behavior' . PHP_EOL;
        }

        IdeHelper::updateEditorConfig($isPhpGenesis);
    }
}