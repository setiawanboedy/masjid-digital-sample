<?php

namespace App\Helper;

class ConvertAmount
{
    public static function amountToString($num)
    {
        if (!$num) {
            return 'Rp 0';
        }
        return 'Rp ' . number_format($num, 0, ',', '.');
    }

    public static function amountToStringDot($num)
    {
        if (!$num) {
            return '';
        }
        return number_format($num, 0, ',', '.');
    }

    public static function amountToStringJt($num)
    {
        if (!$num) {
            return'Rp 0';
        }
        if ($num >= 1000000) {
            return 'Rp ' .($num / 1000000) . 'jt';
        }else{
            return ConvertAmount::amountToString($num);
        } 
    }
}