<?php
namespace BeaCukai;

#TODO

class Product{
    private string $hsCode;
    private string $description;
    private int $amount;
    private float $ppn;
    private float $ppnBm;

    public function __construct(){

    }

    public function getHsCode(){
        return $this->hsCode;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function getPpn(){
        return $this->ppn;
    }

    public function getPpnBm(){
        return $this->ppnBm;
    }
}