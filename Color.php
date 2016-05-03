<?php

class Color
{
    private static function decodeColor()
    {
        try{
            return json_decode(file_get_contents('color.json'), true);
        }catch (Exception $e){
            throw  new Exception($e->getMessage());
        }
    }

    public static function applyColor($string, $color)
    {
        try{
            $colorArray = self::decodeColor();
            if(array_key_exists($color, $colorArray)){
                return "\033[" . $colorArray[$color] . "m" . $string . "\033[0m";
            }else{
                throw new Exception ("COLOR_NOT_FOUND");
            }
            
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public static function echoApplyColor($string, $color)
    {
        try{
            echo self::applyColor($string, $color);
        }catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}