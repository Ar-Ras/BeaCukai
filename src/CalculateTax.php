<?php
namespace ArRas\BeaCukai;


use ArRas\BeaCukai\Cif\Cif;
use ArRas\BeaCukai\Pdri\Pdri;

#TODO

/* Perhitungan import, dalam rupiah:

Nilai bea masuk:

CIF = Harga barang + Asuransi + Ongkos kirim
Biaya Bea Masuk = CIF * Bea Masuk

Total harga impor = Biaya Bea Masuk + Harga barang
-------------------------------------------------------

Pajak Dalam Rangka Impor (PDRI):

PPN Impor harus dibayar = Total harga impor * Tarif PPN
PPh Impor harus dibayar = Total harga impor * Tarif pph

Total PDRI = PPN Impor harus dibayar + PPh Impor harus dibayar

Biaya impor = Biaya Bea Masuk + PPN Impor harus dibayar + Pph Impor harus dibayar

-------------------------------------------------------

Jumlah uang untuk belanja:

Total payment = Harga barang + Biaya Bea Masuk + Total PDRI */

class CalculateTax{
    private Product $prod;
    private Cif $cif;
    private Pdri $pdri;

    private $cifValue;
    private $pdriValue;

    public function __construct(Product $prod){
        $this->prod = $prod;
    }

    public function calculateCIF(float $insuranceCost, float $shippingCost){
        $this->cif = new Cif();

        $goodsCost = $this->prod->getPrice();
        $importFee = $this->prod->getEntryTax();

        $this->cif->calculateCIF($insuranceCost, $shippingCost, $goodsCost);
        $this->cif->calculateCustomsFee($importFee);
        $this->cifValue = $this->cif->calculateTotalImportFee();

    }

    public function calculatePDRI(int $pphId){
        $this->pdri = new Pdri($this->prod);


        $this->pdri->calculatePayablePpn($this->cifValue);
        $this->pdri->calculatePayablePph($this->cifValue, $pphId);

        if ($this->prod->getppnBm() > 0)
            $this->pdri->calculatePayablePpnBm($this->cifValue);


        $this->pdriValue = $this->pdri->calculateTotalImportFee();
    }

    public function calculateTotal(){
        $price = $this->prod->getPrice();

        return $price + $this->cifValue + $this->pdriValue;
    }
}