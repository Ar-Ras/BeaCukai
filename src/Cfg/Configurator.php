<?php
namespace ArRas\BeaCukai\Cfg;

#TODO

class Configurator{
    private static String $pphJsonPath = "../../database/pph.json";
    private static $pphJsonContent;

    public static function setpphJsonPath($pphPath){
     self::$pphJsonPath = $pphPath;

     self::$pphJsonContent = json_decode(file_get_contents($pphPath), true);

    }

    public static function setPphJsonContent(){
        self::$pphJsonContent = json_decode(file_get_contents(self::$pphJsonPath), true);

    }

    public static function getPphJsonContent(){
        return self::$pphJsonContent;
    }
}