<?php
namespace BeaCukai;

#TODO

class Product{
    private string $hsCode;
    private string $description;
    private int $amount;
    private int $price;
    private float $EntryTax;
    private float $ppn;
    private float $ppnBm;

    public function __construct(){
        #TODO
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

    public function getEntryTax(){
        return $this->EntryTax;
    }

    public function getPrice(){
        return $this->Price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setHsCode($hs){
        $this->hsCode = $hs;
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