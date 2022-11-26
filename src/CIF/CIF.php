<?php
namespace ArRas\BeaCukai;

#TODO

class CIF{
     private float $insuranceCost;
     private float $shippingCost;
     private float $goodsCost;
     private float $CIF;
     private float $customsFee;


      public function __construct(){
         #TODO
      }

     public function calculateCIF(float $insuranceCost, float $shippingCost, $goodsCost): float{
         $this->CIF = $insuranceCost + $shippingCost + $goodsCost;

         return $this->CIF;
     }

     public function calculateCustomsFee(float $importFee): float {
         $this->customsFee = $importFee * $this->CIF;  
         return $this->customsFee;
     }

     public function calculateTotalImportFee(): float {
        return $this->customsFee + $this->goodsCost;
     }
}