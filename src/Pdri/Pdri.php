<?php
namespace ArRas\BeaCukai\Pdri;

use ArRas\BeaCukai\Product;
use ArRas\BeaCukai\Ppn\PpnTariff;
use ArRas\BeaCukai\Ppn\PpnBmTariff;
use ArRas\BeaCukai\Pph\PphTariff;
use ArRas\BeaCukai\Pph\Owners\NonNpwpOwner;
use ArRas\BeaCukai\Pph\Owners\NpwpOwner;
use ArRas\BeaCukai\Pph\Owners\ApiOwner;





class Pdri{

    private float $payablePpn;
    private float $payablePph;
    private float $payablePpnBm = 0;
    private float $totalImportFee;

    private Product $product;
    private PphTariff $pph;
    

    public function __construct(Product $product){
        $this->product = $product;
    }
    
    public function calculatePayablePpn(float $importPayable): float{
        $Ppn = new PpnTariff($this->product);

        $this->payablePpn = $Ppn->calculatePpn($importPayable);

        return $this->payablePpn;
    }

    public function calculatePayablePph(float $importPayable, int $pphId): float{
        switch($pphId){
            case(0):
                $this->pph = new NonNpwpOwner();
                break;
            case(1):
                $this->pph = new NpwpOwner();
                break;
            case(2): 
                $this->pph = new ApiOwner();
                break;
            default:
                echo "invalid";
                break;
        }

        $this->payablePph = $this->pph->calculateTariff($importPayable);
        return $this->payablePph;
    }

    public function calculatePayablePpnBm(float $importPayable): float{
        $ppnBmCalc = new PpnBmTariff($this->product);
        $ppn = $this->product->getPpn();


        $this->payablePpnBm = $ppnBmCalc->calculatePpnBm($importPayable);

        $ppn = $this->product->getPpn();

        $this->payablePpn = $ppn * ($this->product->getPrice() - $this->payablePpnBm);
        


        /* PPN = Tarif PPN x (Harga Barang – PPnBM)

            PPN = 10% x (Rp2.000.000.000 – (Rp2.000.000.000 x 40%))

            PPN = 10% x (Rp2.000.000.000 –800.000.000)

            PPN = 10% x Rp1.200.000.000 =Rp120.000.0000

            Jadi, total harga mobil yang harus dibayarkan Andi adalah:

            =Harga Mobil + PPN + PPnBM 

            =Rp2.000.000.000+Rp120.000.000+Rp800.000.000

            =Rp2.920.000.000 
        */
        return $this->payablePpn;
    }

    public function calculateTotalImportFee(): float{
        
        $this->totalImportFee = $this->payablePpn + $this->payablePph + $this->payablePpnBm;
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