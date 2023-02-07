<?php

class perpustakaan {

    public $buku = [
    [
        'judul' => 'Biologi',
        'ISBN' => '01-222',
    ],
    [
        'judul' => 'IPS',
        'ISBN' => '01-223',
    ],
    [
        'judul' => 'KIMIA',
        'ISBN' => '01-224',
    ],
    [
        'judul' => 'FISIKA',
        'ISBN' => '01-225',
    ],
];

    public function show_buku(){

        foreach($this->buku as $judul=>$isi){
            echo $isi["ISBN"]." ".$isi["judul"]."\n";
        }

    }

    public function tambah_buku($a,$b){
        $this->buku[]["judul"]=$a;
        $this->buku[count($this->buku)-1]["ISBN"]=$b;
    }

    public function meminjam($n0){
        echo "Anda Meminjam Buku : ". $this->buku[$n0-1]["judul"]."\n";
        unset($this->buku[$n0-1]);
    }

    // public function mengembalikan($no){

    // }
}

$show_buku = new perpustakaan;
$show_buku->show_buku();

echo "\n";

echo "Masukkan judul buku : ";
$tambah_judul = trim(fgets(STDIN));
echo "Masukkan ISBN : ";
$tambah_isbn = trim(fgets(STDIN));
$show_buku->tambah_buku($tambah_judul,$tambah_isbn);

$show_buku->show_buku();

echo "Masukkan nomor buku yang di pinjam : ";
$pinjam_buku = trim(fgets(STDIN));
$show_buku->meminjam($pinjam_buku);

$show_buku->show_buku();