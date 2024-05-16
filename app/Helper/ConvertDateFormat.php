<?php

namespace App\Helper;
use DateTime;

class ConvertDateFormat{

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
    
        foreach (ConvertDateFormat::bulanIndo() as $eng => $ind) {
            $formattedDate = str_replace($eng, $ind, $formattedDate);
        }
    
        return $formattedDate;
    }
    public static function toIDMonthFormat($date){
        $dateStamp = new DateTime($date);
    
        $formattedDate = $dateStamp->format('F Y');
    
        foreach (ConvertDateFormat::bulanIndo() as $eng => $ind) {
            $formattedDate = str_replace($eng, $ind, $formattedDate);
        }
    
        return $formattedDate;
    }
}
