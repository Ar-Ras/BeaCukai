<?php
namespace ArRas\BeaCukai\PPH\Owners;

use ArRas\BeaCukai\PPH\PphTariff;
use ArRas\BeaCukai\cfg\Configurator;

#TODO

class APIOwner implements PphTariff{



    public function CalculateTariff($val): float{
        $pphJson = Configurator::getPphJsonContent();
        $pphVal = 0.01;

        for($i=0; $i < count($pphJson); $i++){
            if ($pphJson[$i]['id'] == 2)
                $pphVal = $pphJson[$i]['value'];
        }
        #TODO: Get Pph value from Json

        return $val * $pphVal;
    }
}