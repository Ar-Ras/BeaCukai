<?php
namespace ArRas\BeaCukai\Pph\Owners;

use ArRas\BeaCukai\Pph\PphTariff;
use ArRas\BeaCukai\Cfg\Configurator;


#TODO

class NonNPWPOwner implements PphTariff{

    public function __construct(){
        
    }
    
    public function CalculateTariff($val): float{
        $pphJson = Configurator::getPphJsonContent();
        $pphVal = 0.01;

        for($i=0; $i < count($pphJson); $i++){
            if ($pphJson[$i]['id'] == 0)
                $pphVal = $pphJson[$i]['value'];
        }

        return $val * $pphVal;
    }   
}