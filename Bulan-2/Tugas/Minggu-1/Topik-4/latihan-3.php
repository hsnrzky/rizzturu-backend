<?php

$nomor = [2, 3, 4, 5, 6, 7, 8, 9];
function nilai($nilai){
    $n=[];
    foreach($nilai as $count){
        $n[] = $count*3;
        
        }return $n;
}
$jumlah = nilai($nomor);
foreach($jumlah as $hasil)
echo $hasil.", ";
?>