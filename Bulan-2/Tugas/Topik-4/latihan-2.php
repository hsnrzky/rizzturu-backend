<?php
echo "Masukan tinggi segitiga : ";
$height = trim(fgets(STDIN));
echo "Masukan alas segitiga : ";
$base = trim(fgets(STDIN));



//Luas Segitiga
function calcTriangleArea(int $height,int $base){
    $tringular_board = $base * $height /2;
    echo "Luas segitiga adalah : {$tringular_board} \n\n\n";
}

calcTriangleArea($height,$base);
echo "Sek##################################### \n\n\n";


//Luas Lingkaran
echo "Masukan jari-jari lingkaran : ";
$radius =trim(fgets(STDIN));
function calcCircleArea(int $radius){
    $circle_board = 22/7 * $radius * $radius;
    echo "Luas Lingkaran adalah : {$circle_board} \n\n\n";
}

calcCircleArea($radius);
echo "Sek##################################### \n\n\n";


// //Luas Trapesium
echo "Masukan sisi panjang trapesium : ";
$side_short =trim(fgets(STDIN));
echo "Masukan sisi pendek trapesium : ";
$side_long =trim(fgets(STDIN));
echo "Masukan tinggi trapesium : ";
$height =trim(fgets(STDIN));


function calcTrapezoidArea(int $side_short, int $side_long, int $height){
    $trapezoid_board = 1/2 * ($side_short + $side_long) * $height;
    echo "Luas trapesium adalah : {$trapezoid_board} \n";
}

calcTrapezoidArea($side_short,$side_long,$height);
?>