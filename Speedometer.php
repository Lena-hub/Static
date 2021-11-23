<?php

//Créé une classe Speedometer

class Speedometer
{
// Une méthode static qui convertit les KM en MILES

    public static function convertKmToMiles($km)
    {
    return $km * self::convert;
    }

// une autre qui convertit les MILES en KM.

    public static function convertMilesToKm($m)
    {
        return $m * 1 / self::convert;

    }

// (pense aux constantes !)

    const convert = 0.621;
}
