<?php
namespace ArRas\BeaCukai\Ppn;

use ArRas\BeaCukai\Product;

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