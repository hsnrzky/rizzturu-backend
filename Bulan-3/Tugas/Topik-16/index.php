<?php

require_once ('vendor/autoload.php');

use Pai\Topik16\Tugas\BangunDatar\Persegi;
$Persegi = new Persegi;
$Persegi->luas();
$Persegi->keliling();

use Pai\Topik16\Tugas\BangunDatar\PersegiPanjang;
$PersegiPanjang = new PersegiPanjang;
$PersegiPanjang->luas();
$PersegiPanjang->keliling();

use Pai\Topik16\Tugas\BangunDatar\Lingkaran;
$Ligkaran = new Lingkaran;
$Ligkaran->luas();
$Ligkaran->keliling();

use Pai\Topik16\Tugas\BangunDatar\Segitiga;
$Segitiga = new Segitiga;
$Segitiga->luas();
$Segitiga->keliling();
