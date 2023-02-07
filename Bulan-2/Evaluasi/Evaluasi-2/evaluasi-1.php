<?php

class Register
{
    private $murid = [
      [
        'name' => "Arief",
        'NIK'  => "TOO1"
      ]
    ];
    // $berapa_banyak=trim(fgets(STDIN));
    public function show_murid(){

        foreach($this->murid as $nama=>$nik){
            echo $nik["NIK"]." ".$nik["name"]."\n";
        }

    }

    public function tambah_murid($berapa_banyak,$a,$b){
        // for($i=0;$i<$berapa_banyak;$i++){
        //     echo "Santri yang masuk ".($i+1)."\n";
            $this->murid[]["name"]=$a;
            $this->murid[count($this->murid)-1]["NIK"]=$b;
        }
        

}


// Register::insertStudent(['name' => $name, 'nik' => $nik])
$show_murid = new Register;
$show_murid->show_murid();

echo "\n";

echo "Nama : ";
$tambah_nama = trim(fgets(STDIN));
echo "NIK : ";
$tambah_nik = trim(fgets(STDIN));
$show_murid->tambah_murid($tambah_nama,$tambah_nik);

$show_murid->show_murid();

// echo "Masukkan nomor buku yang di pinjam : ";
// $pinjam_buku = trim(fgets(STDIN));
// $show_buku->meminjam($pinjam_buku);

// $show_buku->show_buku();