<?php
namespace BeaCukai;

class NonNPWPOwner implements PphTariff{
    public function CalculateTariff($val): float{
        return $val * 0.15;
    }   
}