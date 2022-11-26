<?php
namespace ArRas\BeaCukai\PPH\Owners;

use ArRas\BeaCukai\PPH\PphTariff;

#TODO

class APIOwner implements PphTariff{



    public function CalculateTariff($val): float{
        #TODO: Get Pph value from Json

        return $val * 0.025;
    }
}