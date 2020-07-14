<?php

namespace App;

class Calc
{
    public function sum(int $first, int $seccond): int
    {
        return $first + $seccond;
    }

    public function dif(int $first, int $seccond): int
    {
        return $first - $seccond;
    }

    public function mul(int $first, int $seccond): int
    {
        return $first * $seccond;
    }

    public function div(int $first, int $seccond): float
    {
        return $first / $seccond;
    }
}
