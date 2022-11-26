<?php
namespace BeaCukai;

#TODO

class Configurator{
    private static String $pphJsonPath = "../../database/pph.json";
    private static String $BeaCukaiJsonPath = "";
    private static $pphJsonContent;

    public static function setpphJsonPath($pphPath){
     global $pphJsonPath;
     $pphJsonPath = $pphPath;

     $pphJsonContent = json_decode(file_get_contents($pphPath));

    }

    public static function setBeaCukaiPath($beaCukaiPath){
        global $beaCukaiJsonPath;
        $beaCukaiJsonPath = $beaCukaiPath;
    }

    public static function getpphJsonContent(){
        global $pphJsonContent;
        return $pphJsonContent;
    }
}