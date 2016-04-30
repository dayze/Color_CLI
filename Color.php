<?php

class Color
{
    private static $arrayColor = array("black" => "0;30", "blue" => "0;34", "green" => "0;32", "cyan" => "0;36",
        "red" => "0;31", "purple" => "0;35", "brown" => "0;33", "grayLight" => "0;37",
        "darkGray" => "1;30", "blueLight" => "1;34", "greenLight" => "1;32",
        "cyanLight" => "1;36", "redLight" => "1;31", "purpleLight" => "1;35",
        "yellow" => "1;33", "white" => "1;37");

    public static function applyColor($string, $color){
        return "\033[" .self::$arrayColor[$color] . "m" . $string . "\033[" . self::$arrayColor['white'] . "m";
    }

    public static function echoApplyColor($string, $color){
         echo self::applyColor($string, $color);
    }

}