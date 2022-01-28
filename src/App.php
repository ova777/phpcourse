<?php

namespace MyApp;

use MyApp\Logger\LoggerInterface;

class App
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(): void
    {
        //DB::getInstance()->query('INSERT INTO ...');

        $this->logger->err('error');
        $this->logger->warn('warning');
        $this->logger->info('just info');

        echo 'ok';
    }
}
