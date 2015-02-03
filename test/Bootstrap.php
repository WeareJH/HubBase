<?php

use JhHubBaseTest\Util\ServiceManagerFactory;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/London');

$files = [__DIR__ . '/../vendor/autoload.php', __DIR__ . '/../../../autoload.php'];

foreach ($files as $file) {
    if (file_exists($file)) {
        $loader = require $file;

        break;
    }
}

if (! isset($loader)) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you install via composer?');
}

$loader->add('JhHubBaseTest\\', __DIR__);

$configFiles = [__DIR__ . '/TestConfiguration.php', __DIR__ . '/TestConfiguration.php.dist'];

foreach ($configFiles as $configFile) {
    if (file_exists($configFile)) {
        $config = require $configFile;

        break;
    }
}

ServiceManagerFactory::setApplicationConfig($config);
unset($files, $file, $loader, $configFiles, $configFile, $config);
