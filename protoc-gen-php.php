#!/usr/bin/env php
<?php

use Allegro\Protobuf\Compiler\Logger;

$composerAutoload = __DIR__ . '/vendor/autoload.php';
if(!file_exists($composerAutoload)) {
    echo '[ERROR] The dependencies are not installed. Run "composer install" in order to install them.' . PHP_EOL . PHP_EOL;
    exit(1);
}

require_once $composerAutoload;

if(!extension_loaded('protobuf')) {
    Logger::error('protobuf module is not installed.');
    exit(1);
}

$compiler = new Allegro\Protobuf\Compiler\Compiler();
$compiler->run(__FILE__);