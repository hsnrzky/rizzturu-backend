<?php
echo "Masukan lebar persegi panjang : ";
$width = trim(fgets(STDIN));
echo "Masukan panjang persegi panjang : ";
$length =trim(fgets(STDIN));
function calcRectangleArea($width,$length){
    $integer = $width*$length;
    echo "Luas persegi panjang adalah : {$integer}";
}

calcRectangleArea ($width,$length);
?>