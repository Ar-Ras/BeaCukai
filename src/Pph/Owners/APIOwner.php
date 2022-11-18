<?php
namespace BeaCukai;

#TODO

class APIOwner implements PphTariff{



    public function CalculateTariff($val): float{
        #TODO: Get Pph value from Json

        return $val * 0.025;
    }
}