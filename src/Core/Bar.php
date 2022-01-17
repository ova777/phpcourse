<?php

namespace MyApp\Core;

class Bar
{
    public function test()
    {
        echo 'test from Core\\Bar', PHP_EOL;
        echo '!!: ';
        (new \MyApp\Foo())->test();
    }
}
