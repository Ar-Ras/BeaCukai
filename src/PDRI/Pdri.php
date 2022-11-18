<?php
namespace BeaCukai;

class Pdri{

    private float $payablePpn;
    private float $payablePph;
    private float $payablePpnBm;
    private float $totalImportFee;
    

    public function __construct(){

    }
    
    public function calculatePayablePpn(float $importPayable): float{
        $Ppn = new PpnTariff();
        return 0.1;
    }

    public function calculatePayablePph(): float{
        return 0.2;
    }

    public function calculatePayablePpnBm(): float{
        return 0.3;
    }

    public function calculateTotalImportFee(): float{
        return 0.4;
    }

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