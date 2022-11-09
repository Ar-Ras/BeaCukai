<?php

class APIOwner implements PphTariff{
    public function CalculateTariff($val): float{
        return $val * 0.025;
    }
}