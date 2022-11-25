<?php
namespace BeaCukai;

#TODO

class CIF{
     private float $insuranceCost;
     private float $shippingCost;
     private float $goodsCost;
     private float $CIF;

      public function __construct(){
         #TODO
      }

     public function calculateCIF(float $insuranceCost, float $shippingCost, $goodsCost): float{
         $this->CIF = $insuranceCost + $shippingCost + $goodsCost;

         return $this->CIF;
     }

     public function calculateCustomsFee(): float {
        return 0.02;
     }
     public function calculateTotalImportFee(): float {
        return 0.03;
     }
}