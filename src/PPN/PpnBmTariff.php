<?php
namespace ArRas\BeaCukai;


class PpnBmTariff{
    private Product $prod;

    public function __construct(Product $product){
        $this->prod = $product;
    }

    public function calculatePpnBm(float $importPayable){
        $ppnBm = $this->prod->getPpnBm();

        $payablePpnBm = $importPayable * $ppnBm;

        return $payablePpnBm;
    }
    
}