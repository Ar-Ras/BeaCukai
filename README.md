
# Package Perhitungan Pajak Barang Import

Package perhitungan pajak barang impor fungsinya ialah untuk mempermudah user dalam bertransaksi barang yang berasal dari luar negeri
## Features

- Menghitung pajak cukai barang
- Menghitung PPNBM
- Menghitung PPN
- Menghitung PPH


## Installation

Install package with composer

```bash
  composer require ar-ras/bea-cukai
  composer install
```
    
## Usage/Examples

```php
    $myPrice = $insuranceCost = $shipmentCost = $goodsCost = 0;
    $entryTax = $ppn = $ppnBm = $pph = 0;
    
    Configurator::setPphJsonPath('C:\xampp\htdocs\beacukai\vendor\ar-ras\bea-cukai\database\pph.json');
    Configurator::setPphJsonContent();
 
    $myProduct = new Product();
    $myProduct->setPrice($goodsCost);
    $myProduct->setEntryTax($entryTax);
    $myProduct->setPpn($ppn);
    $myProduct->setPpnBm($ppnBm);
 
    $taxCalc = new CalculateTax($myProduct);
    $taxCalc->calculateCIF($insuranceCost, $shipmentCost);
 
    $taxCalc->calculatePDRI($pph);
 
    $myPrice = $taxCalc->calculateTotal();
```


## FAQ

#### Apa yang bisa saya dapat dari package ini?

Dengan package ini, user dapat mengetahui total harga barang impor yang sudah dihitung dengan nilai pajak yang berlaku

#### Apakah ada biaya untuk menggunakan package ini?

Tidak ada, package ini gratis untuk digunakan (free to use)

## Authors

- [@ariaarub](https://github.com/ariaarub)
- [@dennishansss](https://github.com/dennishansss)
- [@AchmadRaflyUB](https://github.com/AchmadRaflyUB)
- [@auryhs](https://github.com/auryhs)
- [@ratusalmaa](https://github.com/ratusalmaa)
- [@Japeran](https://github.com/Japeran)
