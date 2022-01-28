<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Task7Test extends TestCase
{
    /**
     * @dataProvider isHappyWrongProvider
     */
    public function testIsHappyWrong($num)
    {
        $task7 = new \MyApp\Tasks\Task7();

        $this->expectException('Exception');
        $task7->isHappy($num);
    }

    public function isHappyWrongProvider(): array
    {
        return [
            [''],
            ['110'],
        ];
    }

    /**
     * @dataProvider isHappyProvider
     */
    public function testIsHappy($expected, $num): void
    {
        $task7 = new \MyApp\Tasks\Task7();
        self::assertEquals($expected, $task7->isHappy($num));
    }

    public function isHappyProvider(): array
    {
        return [
            [true, '101101'],
            [false, '111000'],
            [false, '10'],
            [true, '00'],
        ];
    }
}
