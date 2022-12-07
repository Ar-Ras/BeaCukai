<?php
namespace ArRas\BeaCukai;

#TODO

class Product{
    private int $price;
    private float $entryTax;
    private float $ppn;
    private float $ppnBm;

    public function __construct(){
        $this->price = 0;
        $this->entryTax = 0;
        $this->ppn = 0;
        $this->ppnBm = 0;
        #TODO
    }


    public function getPpn(){
        return $this->ppn;
    }

    public function getPpnBm(){
        return $this->ppnBm;
    }

    public function getEntryTax(){
        return $this->entryTax;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function setPpn($ppn){
        $this->ppn = $ppn;
    }

    public function setPpnBm($ppnBm){
        $this->ppnBm = $ppnBm;
    }

    public function setEntryTax($entryTax){
        $this->entryTax = $entryTax;
    }
}