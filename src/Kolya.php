<?php

namespace MyApp;

class Kolya
{
    private static int $counter = 0;

    private int $weight = 1;

    public function __construct()
    {
        self::$counter++;
    }

    public static function sayCountKolyas()
    {
        echo 'Kolya count = ' . self::$counter, PHP_EOL;
    }

    public function bar()
    {
        echo 'bar';
    }

    public function sayWeight()
    {
        echo $this->weight , PHP_EOL;
    }

    public function eat()
    {
        $this->weight++;
    }
}
