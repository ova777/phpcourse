<?php

namespace MyApp\Tasks;

class Task7
{
    public function isHappy(string $num): bool
    {
        $len = strlen($num);
        if ($len === 0) {
            throw new \Exception('It is not a ticket');
        }
        if ($len % 2 !== 0) {
            throw new \Exception('Should be even');
        }

        $left = substr($num, 0, $len / 2);
        $right = substr($num, $len / 2);

        return array_sum(str_split($left)) === array_sum(str_split($right));
    }
}
