<?php
namespace BeaCukai;

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