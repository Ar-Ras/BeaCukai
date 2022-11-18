<?php
namespace BeaCukai;

#TODO

class NPWPOwner implements PphTariff{
    public function CalculateTariff($val): float{
        #TODO: Get Pph value from Json

        return $val * 0.075;
    }
}