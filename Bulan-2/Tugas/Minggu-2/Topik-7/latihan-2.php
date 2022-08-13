<?php

class Persegi{
    public $panjang;
    public $lebar;

    public function __construct(){
        echo "LUAS PERSEGI PANJANG\n\n";
    }
    public function luas($panjang,$lebar){
        $this->luas = $panjang * $lebar;
    }
    public function hasil(){
        return $this->luas;
    }
}

$hasil= new Persegi();
echo "Masukan panjang : ";
$panjang =trim(fgets(STDIN));
echo "Masukan lebar : ";
$lebar = trim(fgets(STDIN));
$hasil->luas($panjang, $lebar);

echo "Luas PERSEGI PANJANG adalah : ". $hasil->hasil(). "\n";
