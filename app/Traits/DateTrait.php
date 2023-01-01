<?php

namespace App\Traits;
use IntlDateFormatter;


trait DateTrait
{
    public  function arabicDate( $artice_create_at ){

        // Formatter Day
        $formatter_day = new IntlDateFormatter('ar_AE', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Asia/Dubai', IntlDateFormatter::GREGORIAN, 'dd' );
        $arabic_day = $formatter_day->format(strtotime($artice_create_at));

        // Formatter month
        $formatter_month = new IntlDateFormatter('ar_AE', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Asia/Dubai', IntlDateFormatter::GREGORIAN, 'MMMM' );
        $arabic_month = $formatter_month->format(strtotime($artice_create_at));

        // Formatter year
        $formatter_year = new IntlDateFormatter('ar_AE', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Asia/Dubai', IntlDateFormatter::GREGORIAN, 'yyyy' );
        $arabic_year = $formatter_year->format(strtotime($artice_create_at));

        $arabic_date = [
            "day"    => $arabic_day,
            "month"  => $arabic_month,
            "year"   => $arabic_year,
        ];

        return $arabic_date;

    }

}
