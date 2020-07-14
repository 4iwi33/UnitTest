<?php

declare(strict_types=1);

use App\Calc;
use PHPUnit\Framework\TestCase;
use App\Str;

class CalcTest extends TestCase
{
    function testSum(): void
    {
        $calc = new Calc();

        $this->assertIsInt(
            $calc->sum(2, 3)
        );

        $this->assertEquals(
            5,
            $calc->sum(2, 3)
        );
    }

    function testDif(): void
    {
        $calc = new Calc();

        $this->assertIsInt(
            $calc->dif(4, 3)
        );

        $this->assertEquals(
            1,
            $calc->dif(4, 3)
        );
    }

    function testMul(): void
    {
        $calc = new Calc();

        $this->assertIsInt(
            $calc->mul(6, 3)
        );

        $this->assertEquals(
            21,
            $calc->mul(7, 3)
        );
    }

    function testDiv(): void
    {
        $calc = new Calc();

        $this->assertEquals(
            5,
            $calc->div(25, 5)
        );

        $this->assertIsFloat($calc->div(10, 2));
    }
}
