<?php

namespace Pai\Topik16\Tugas\BangunDatar;
class Persegi
{
    public function __construct()
    {
        echo "=============================="."\n";
        echo "|| Ini Bangun Datar Persegi ||"."\n";
        echo "=============================="."\n";
    }
    public function luas()
    {
        $sisi = 1;
        $result = $sisi * $sisi;
        echo "Luas Persegi adalah $result"."\n";  
    }
    public function keliling()
    {
        $sisi = 1;
        $result = $sisi * 4;
        echo "Keliling Persegi adalah $result"."\n"."\n"; 
    }
}