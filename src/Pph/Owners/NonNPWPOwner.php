<?php
namespace BeaCukai;

#TODO

class NonNPWPOwner implements PphTariff{
    public function CalculateTariff($val): float{
        return $val * 0.15;
    }   
}