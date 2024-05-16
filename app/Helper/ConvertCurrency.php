<?php

namespace App\Helper;

class ConvertCurrency{
    public static function reverseFormatCurrency($value)
{
    $number = str_replace('.', '', $value);

    return (int) $number;
}
}