<?php

namespace App\Helper;

use Carbon\Carbon;
use DateTime;

class ConvertDateTimeFormat{

    public static function bulanIndo(){
       return [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        ];
    }
    public static function toIDDateFormat($date){
        if (empty($date)) {
            return '-';
        }
    
        $dateStamp = new DateTime($date);
    
        $formattedDate = $dateStamp->format('d F Y');
    
        foreach (ConvertDateTimeFormat::bulanIndo() as $eng => $ind) {
            $formattedDate = str_replace($eng, $ind, $formattedDate);
        }
    
        return $formattedDate;
    }
    public static function toIDMonthFormat($date){
        $dateStamp = new DateTime($date);
    
        $formattedDate = $dateStamp->format('F Y');
    
        foreach (ConvertDateTimeFormat::bulanIndo() as $eng => $ind) {
            $formattedDate = str_replace($eng, $ind, $formattedDate);
        }
    
        return $formattedDate;
    }


    public static function toDateId($dateTime)
    {
        Carbon::setLocale('id');
        $datetime = Carbon::parse($dateTime);
        $formattedDate = $datetime->translatedFormat('d F Y');

        return $formattedDate;
    }

    public static function toTime($dateTime)
    {
        $datetime = Carbon::parse($dateTime);
        $formattedTime = $datetime->format('H:i');

        return $formattedTime;
    }
}
