<?php

//Luas LINGKARAN
class Lingkaran{
    public function __construct()
    {
        echo "#LUAS LINGKARAN#\n\n";
    }
    public function luas(int $jari){
        $this->luas = 22/7 * $jari * $jari;
    }
    public function hasil(){
        return $this->luas;
    }
}

$hasil = new Lingkaran;
echo "Masukan jari-jari : ";
$jari = trim(fgets(STDIN));
$hasil->luas($jari);

echo "Luas Lingkaran adalah : ". $hasil->hasil(). "\n";


//Luas Traspesium
class Trapesium{
    public function __construct()
    {
        echo "#LUAS TRAPESIUM#\n\n";
    }
    public function luas(int $sisi1, int $sisi2, int $tinggi){
        $this->luas = 1/2 * ($sisi1 + $sisi2) * $tinggi;
    }
    public function hasil(){
        return $this->luas;
    }
}

$hasil = new Lingkaran;
echo "Masukan sisi panjang : ";
$sisi1 = trim(fgets(STDIN));
echo "Masukan sisi pendek : ";
$sisi2 = trim(fgets(STDIN));
echo "Masukan tinggi : ";
$tinggi = trim(fgets(STDIN));
$hasil->luas($sisi1,$sisi2,$tinggi);
echo "Luas Trapesium adalah : ". $hasil->hasil(). "\n";



