<?php
namespace BeaCukai;

class NPWPOwner implements PphTariff{
    public function CalculateTariff($val): float{
        return $val * 0.075;
    }
}