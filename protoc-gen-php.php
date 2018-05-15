#!/usr/bin/env php
<?php

if(!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo '[ERROR] The dependencies are not installed. Run "composer install" in order to install them.' . PHP_EOL . PHP_EOL;
    exit(1);
}

require_once __DIR__ . '/vendor/autoload.php';

if(!extension_loaded('protobuf')) {
	Allegro\Protobuf\Compiler\Logger::error('protobuf module is not installed.');
    exit(1);
}

$compiler = new Allegro\Protobuf\Compiler\Compiler();
$compiler->run(__FILE__);