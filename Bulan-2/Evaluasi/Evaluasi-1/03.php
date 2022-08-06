<?php
echo "Nama : ";
$name =trim(fgets(STDIN));
echo "NIK : ";
$nik =trim(fgets(STDIN));
echo "Jurusan : ";
$jurusan =trim(fgets(STDIN));
echo "Divisi : ";
$divisi =trim(fgets(STDIN));
echo "Umur : ";
$age =trim(fgets(STDIN));

$students = [
    [
        'name' => $name,
        'nik'  => $nik,
        'jurusan' => $jurusan,
        'divisi' => $divisi,
        'age' => $age
    ],
    [
        'name' => $name,
        'nik' => $nik,
        'jurusan' => $jurusan,
        'divisi' => $divisi,
        'age' => $age
    ]
  ];

$array_name= [];
$array_nik= [];
$array_jurusan= [];
$array_divisi= [];
$array_age= [];

foreach($student as $key => $value){
    $array_name[$key] = $value['name'];
    $array_nik[$key] = $value['nik'];
    $array_jurusan[$key] = $value['jurusan'];
    $array_divisi[$key] = $value['divisi'];
    $array_age[$key] = $value['age'];
}
print_r($array_jurusan);