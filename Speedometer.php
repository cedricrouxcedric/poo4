<?php


class Speedometer
{
    const CONVERT = 0.621 ;

    /**
     * @param int $km
     * @return float
     */
    public static function kmToMiles (int $km) :float
    {
        return $km * self::CONVERT ;
    }

    /**
     * @param int $miles
     * @return float
     */
    public static function milesToKm (int $miles) :float
    {
        return $miles/ self::CONVERT ;
    }
}