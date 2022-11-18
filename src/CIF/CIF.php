<?php
namespace BeaCukai;

#TODO

class CIF{
     private float $insuranceCost;
     private float $shippingCost;
     private float $goodsCost;
     private float $CIF;

      public function __construct(){
         
      }

     public function calculateCIF(float $insuranceCost, float $shippingCost, $goodsCost): float{
        return 0.01;
     }

     public function calculateCustomsFee(): float {
        return 0.02;
     }
     public function calculateTotalImportFee(): float {
        return 0.03;
     }
}