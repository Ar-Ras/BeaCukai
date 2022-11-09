<?php
namespace BeaCukai;

interface PphTariff{
    public function CalculateTariff($val): float;
}