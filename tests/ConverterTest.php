<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Str;

class ConverterTest extends TestCase
{
    function testCompare(): void
    {
        $stri = new Str();
        $this->assertEquals(
            true,
            $stri->compare("abc", "abc")
        );

        $this->assertEquals(
            false,
            $stri->compare("abc", "ab123")
        );

        $this->assertIsBool(
            $stri->compare("1", "1")
        );
    }

    function testLen(): void
    {
        $stri = new Str();

        $this->assertIsInt(
            $stri->len("Hello")
        );

        $this->assertEquals(
            5,
            $stri->len("hello")
        );

        $this->assertEquals(
            6,
            $stri->len("Привет")
        );
    }
}
