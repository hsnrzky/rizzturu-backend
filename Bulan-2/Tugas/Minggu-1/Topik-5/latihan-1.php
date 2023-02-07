<?php
echo "Masukan lebar persegi panjang : ";
$width = trim(fgets(STDIN));
echo "Masukan panjang persegi panjang : ";
$length =trim(fgets(STDIN));
$calcRectangleArea = function (int $width,int $length){
    $luas = $width*$length;
    echo "Luas persegi panjang adalah : {$luas}";
};

$calcRectangleArea($width,$length);
?>