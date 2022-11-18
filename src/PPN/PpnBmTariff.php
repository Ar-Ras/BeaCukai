<?php
namespace BeaCukai;

class PpnBmTariff{
    private Product $product;

    public function __construct(Product $product){
        $this->product = $product;
    }

    public function calculatePpnBm(float $importPayable){
        
    }
    
}