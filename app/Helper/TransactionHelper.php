<?php

namespace App\Helper;

use Carbon\Carbon;

class TransactionHelper
{
    public static function generateTransactionCode()
    {
        $timestamp = Carbon::now()->format('YmdHis');
        $randomString = strtoupper(bin2hex(random_bytes(4)));

        return 'MDTL-' . $timestamp . $randomString;
    }
}