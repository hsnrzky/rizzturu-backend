<?php
$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
   ];
   $murid_id = [];
   $murid_name = [];
   $murid_division = [];
   $murid_age = [];
   //urut berdasarkan nomor INDUK
   foreach($students as $key => $id){
        $murid_id[$key] = $id['id'];
   }
   array_multisort($murid_id, SORT_ASC, $students);
   print_r($students);
   //urut berdasarkan nama
   foreach($students as $key => $name){
        $murid_name[$key] = $name['name'];
   }
   array_multisort($murid_name, SORT_ASC, $students);
   print_r($students);
   //daftar santri dengan divisi PHP BACKEND
   foreach($students as $key => $divisi){
    $murid_division[$key] = $divisi['division'];
    }
   foreach($murid_division as $key => $divisi){
    if($divisi == 'PHP Backend')
    foreach($students[$key] as $key1 => $divisi1)
    echo $key1. " ". $divisi1 ."\n";
    }
    echo "\n";
    
    //jumlah santri yang berusia kurang dari 25
    foreach($students as $key => $umur){
        $murid_age[$key] = $umur['age'];
    }
$murid_kurang_25 = 0;
$jumlah_usia = 0;
$jumlah_murid = 0;
$usia_terendah = 0;
sort($murid_age);
foreach($students as $key) $jumlah_murid++;
foreach($murid_age as $key => $umur){
    $jumlah_usia += $umur;
    if($umur < "25"){
        $murid_kurang_25++;
    }
}
echo "Jumlah santri dibawah 25 tahun = ".$murid_kurang_25. "\n\n";
$rata_rata_usia_santri = $jumlah_usia/$jumlah_murid;
echo "Rata-rata usia santri = ".$rata_rata_usia_santri."\n\n";
echo "Usia santri paling muda = ".$murid_age[0];