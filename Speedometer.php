<?php

class Speedometer
{
    protected const CONVERTER_KM_MILES = 0.621;
    protected const CONVERTER_MILES_KM = 1.609;

    public static function convertKmToMiles(int $km)
    {
        return $km * self::CONVERTER_KM_MILES;
    }

    public static function convertMilesToKm(int $miles)
    {
        return $miles * self::CONVERTER_MILES_KM;
    }
}