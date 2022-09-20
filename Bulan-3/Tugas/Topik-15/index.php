<?php 

function bangun_datar($class)
{
    require_once($class.".php");
}
spl_autoload_register('bangun_datar');
$Persegi = new Persegi;
$Persegi->luas();
$Persegi->keliling();
$PersegiPanjang = new PersegiPanjang;
$PersegiPanjang->luas();
$PersegiPanjang->keliling();
$Lingkaran = new Lingkaran;
$Lingkaran->luas();
$Lingkaran->keliling();
$Segitiga = new Segitiga;
$Segitiga->luas();
$Segitiga->keliling();