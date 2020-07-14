<?php

namespace App;

class Str
{
    public function compare(string $str1, string $str2): bool
    {
        return $str1 === $str2;
    }

    public function len(string $stri): int
    {
        return iconv_strlen($stri);
    }
}
