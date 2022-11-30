<?php
namespace ArRas\BeaCukai\Pph;

#TODO

interface PphTariff{
    public function CalculateTariff($val): float;
}