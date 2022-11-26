<?php
namespace BeaCukai\PPH\Owners;

use BeaCukai\PPH\PphTariff;


#TODO

class NPWPOwner implements PphTariff{
    public function CalculateTariff($val): float{
        #TODO: Get Pph value from Json

        return $val * 0.075;
    }
}