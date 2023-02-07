<?php

class Segitiga
{
    public function __construct()
    {
        echo "==============================="."\n";
        echo "|| Ini Bangun Datar Segitiga ||"."\n";
        echo "==============================="."\n";

    }
    public function luas()
    {
        $alas = 3;
        $tinggi = 3;
        $result = $alas * $tinggi / 2;
        echo "Luas Segitiga adalah $result"."\n"; 
    }
    public function keliling()
    {
        $a = 3;
        $b = 3;
        $c = 3;
        $result = $a + $b + $c;
        echo "Keliling Segitiga adalah $result"."\n"."\n";
    }
}