<?php
namespace BeaCukai;

class PpnTariff{

    private Product $prod;

    public function __construct(Product $product){
        $this->prod = $product;
    }

    public function calculatePpn(float $importPayable){
        #TODO: Get ppn from Product


        $ppn = $this->prod->getPpn();
        $payablePpn = $importPayable * $ppn;
        
        return $payablePpn;
    }
}