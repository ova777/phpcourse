<?php

namespace MyApp\Logger;

class NewLogger implements LoggerInterface
{
    public function err(string $msg): void
    {
        //DB::getInstance()->query('INSERT INTO errorlog ...');
    }

    public function info(string $msg): void
    {
    }

    public function warn(string $msg): void
    {
    }
}
