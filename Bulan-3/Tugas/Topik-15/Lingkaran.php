<?php

class Lingkaran
{
    public function __construct()
    {
        echo "================================"."\n";
        echo "|| Ini Bangun Datar Lingkaran ||"."\n";
        echo "================================"."\n";
    }
    public function luas()
    {
        $pi = 3.14;
        $r = 4;
        $result = $pi * $r * $r;
        echo "Luas Lingkaran adalah $result"."\n";
    } 
    public function keliling()
    {
        $pi = 3.14;
        $r = 4;
        $result = 2 * $pi * $r;
        echo "Keliling Lingkaran adalah $result"."\n"."\n";
    }
}