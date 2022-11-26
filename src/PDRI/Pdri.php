<?php
namespace BeaCukai\PDRI;

use BeaCukai\Product;
use BeaCukai\PPN\PpnTariff;
use BeaCukai\PPN\PpnBmTariff;


class Pdri{

    private float $payablePpn;
    private float $payablePph;
    private float $payablePpnBm;
    private float $totalImportFee;

    private Product $product;
    

    public function __construct(Product $product){
        $this->product = $product;
    }
    
    public function calculatePayablePpn(float $importPayable): float{
        $Ppn = new PpnTariff($this->product);

        return $Ppn->calculatePpn($importPayable);
    }

    public function calculatePayablePph(): float{
        #TODO: Make selector depending on NPWP/API availability
        return 0.2;
    }

    public function calculatePayablePpnBm(): float{
        $ppnBm = new PpnBmTariff($this->product);

        $ppn = $this->payablePpn;

        
        #TODO: Algo: Has complicated procedure

        /* PPN = Tarif PPN x (Harga Barang – PPnBM)

            PPN = 10% x (Rp2.000.000.000 – (Rp2.000.000.000 x 40%))

            PPN = 10% x (Rp2.000.000.000 –800.000.000)

            PPN = 10% x Rp1.200.000.000 =Rp120.000.0000

            Jadi, total harga mobil yang harus dibayarkan Andi adalah:

            =Harga Mobil + PPN + PPnBM 

            =Rp2.000.000.000+Rp120.000.000+Rp800.000.000

            =Rp2.920.000.000 
        */
        return 0.3;
    }

    public function calculateTotalImportFee(float $payablePpn, float $payablePph, float $payableImport): float{
        
        $this->totalImportFee = $payablePpn + $payablePph + $payableImport;
        return $this->totalImportFee;
    }



    /* Redundant getter */
    public function getPayablePpn(): float{
        return $this->payablePpn;
    }

    public function getPayablePph(): float{
        return $this->payablePph;
    }

    public function getPayablePpnBm(): float{
        return $this->payablePpnBm;
    }

    public function getTotalImportFee(): float{
        return $this->totalImportFee;
    }

}