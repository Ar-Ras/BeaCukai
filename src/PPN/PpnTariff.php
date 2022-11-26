<?php
namespace ArRas\BeaCukai;

class PpnTariff{

    private Product $prod;

    public function __construct(Product $product){
        $this->prod = $product;
    }

    public function calculatePpn(float $importPayable){
        $ppn = $this->prod->getPpn();
        
        $payablePpn = $importPayable * $ppn;
        
        return $payablePpn;
    }
}