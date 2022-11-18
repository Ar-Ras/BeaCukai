<?php
namespace BeaCukai;

#TODO

class Product{
    private string $hsCode;
    private string $description;
    private int $amount;
    private int $price;
    private float $EntryFee;
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

    public function getEntryFee(){
        return $this->EntryFee;
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

    public function setEntryFee($entryFee){
        $this->entryFee = $entryFee;
    }
}