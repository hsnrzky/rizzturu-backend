<?php

echo "========================================\n";
echo "| Selamat Datang Di Program Input Data |\n";
echo "========================================\n";
echo "Data yang ingin diinputkan : ";
$berapa_banyak = trim(fgets(STDIN)); 
echo "\n";
$students = [];
$minat_backend = [];
$kurang_dari_25 = [];
$paling_muda = [];
$usia_terkecil_angka = INF;
for ($i = 0; $i < $berapa_banyak; $i++){
    echo "Masukkan data ".($i+1)."\n";
    echo "Nama : ";
    $nama = trim(fgets(STDIN)); 
    echo "NIK : ";
    $nik = trim(fgets(STDIN)); 
    echo "Jurusan : ";
    $jurusan = trim(fgets(STDIN)); 
    echo "Divisi : ";
    $divisi = trim(fgets(STDIN)); 
    echo "Usia : ";
    $usia = trim(fgets(STDIN)); 

    $students[$i]["nama"] = $nama;
    $students[$i]["nik"] = $nik;
    $students[$i]["jurusan"] = $jurusan;
    $students[$i]["divisi"] = $divisi;
    $students[$i]["usia"] = $usia;
    echo "\n";
    if ($divisi=="backend")$minat_backend[]=$nama;
    if ($usia<25)$kurang_dari_25[]=$nama;
    if ($usia<$usia_terkecil_angka)$usia_terkecil_angka=$usia;
    if ($i==$berapa_banyak-1)for ($j = 0; $j < $berapa_banyak; $j++)if ($students[$j]["usia"]==$usia_terkecil_angka)$paling_muda[] = $students[$j]["nama"];       
}
echo "\n";
echo "Yang minat sebagai Backend adalah ";
foreach ($minat_backend as $a)echo $a.", ";
echo "\n";
echo "Usia yang kurang dari 25 adalah ";
foreach ($kurang_dari_25 as $a)echo $a.", ";
echo "\n";
echo "Usia paling muda adalah ";
foreach ($paling_muda as $a)echo $a.", ";
echo "\n";