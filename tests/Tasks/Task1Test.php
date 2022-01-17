<?php

use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
//    public function fizzBuzz($start, $end): void
//    {
//        echo implode('', $this->generateFizzBuzz($start, $end));
//    }
//
//    public function generateFizzBuzz($start, $end): array
//    {
//
//    }

    public function testBinarySum(): void
    {
        $task1 = new \MyApp\Tasks\Task1();

        $actual = $task1->binarySum('111', '100');
        $expected = '1011';

        self::assertEquals($expected, $actual);
    }
}
