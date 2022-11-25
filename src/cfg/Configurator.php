<?php
namespace BeaCukai;

#TODO

class Configurator{
    private String $pphJsonPath = "../../database/pph.json";
    private String $BeaCukaiPath = "";

    public function setpphJsonPath($pphJsonPath){
     $this->pphJsonPath = $pphJsonPath;   
    }

    public function setBeaCukaiPath($beaCukaiPath){
        $this->beaCukaiPath = $beaCukaiPath;
    }
}