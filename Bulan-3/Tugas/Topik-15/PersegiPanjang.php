<?php

class PersegiPanjang
{
    public function __construct()
    {
        echo "======================================"."\n";
        echo "|| Ini Bangun Datar Persegi Panjang ||"."\n";
        echo "======================================"."\n";
    } 
    public function luas()
    {
        $panjang = 2;
        $lebar = 2;
        $result = $panjang * $lebar;
        echo "Luas Persegi Panjang adalah $result"."\n";
    }
    public function keliling()
    {
        $panjang = 2;
        $lebar = 2;
        $result = 2 * ($panjang+$lebar);
        echo "Keliling Persegi Pajang adalah $result"."\n"."\n"; 
    }
}