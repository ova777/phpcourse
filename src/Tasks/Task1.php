<?php

namespace MyApp\Tasks;

class Task1
{
    public function binarySum(string $a, string $b): string
    {
        return decbin(bindec($a) + bindec($b));
    }
}
