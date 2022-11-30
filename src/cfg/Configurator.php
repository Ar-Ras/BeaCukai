<?php
namespace ArRas\BeaCukai\cfg;

#TODO

class Configurator{
    private static String $pphJsonPath = "../../database/pph.json";
    private static String $BeaCukaiJsonPath = "";
    private static $pphJsonContent;

    public static function setpphJsonPath($pphPath){
     self::$pphJsonPath = $pphPath;

     self::$pphJsonContent = json_decode(file_get_contents($pphPath));

    }

    public static function setBeaCukaiPath($beaCukaiPath){
        self::$BeaCukaiJsonPath = $beaCukaiPath;
    }

    public static function setPphJsonContent(){
        self::$pphJsonContent = json_decode(file_get_contents(self::$pphJsonPath));

    }

    public static function getPphJsonContent(){
        return self::$pphJsonContent;
    }
}