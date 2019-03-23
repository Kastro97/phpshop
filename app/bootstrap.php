<?php

define('ENVIRONMENT', 'development');

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__. '/config.php');
$container = $containerBuilder->build();

return $container;