<?php

require_once __DIR__ . '/../vendor/autoload.php';


$nikolay = new \MyApp\Kolya();
$nikolay->eat();
$nikolay->eat();
$nikolay->sayWeight();

$mikola = new \MyApp\Kolya();
$mikola->sayWeight();

(new \MyApp\Kolya());

\MyApp\Kolya::sayCountKolyas();


$config = require __DIR__ . '/../config.php';

$loggerFactory = new \MyApp\Logger\LoggerFactory($config);
$logger = $loggerFactory->createLogger();

$app = new \MyApp\App($logger);

$app->run();
