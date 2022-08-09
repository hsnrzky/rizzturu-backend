<?php
$nilai = [5, 9, 6, 7, 9, 8, 10, 7, 8];
print_r($nilai);
//MEAN
$c=count($nilai);
echo "Rata-rata : ";
print_r(array_sum($nilai)/$c);
echo "\n";
//MEDIAN
sort($nilai);
print_r($nilai);
$d=$c/2;
if(gettype($d)=='double'){
    $d=floor($d);
    $median=$nilai[$d];
}else{
    $d=floor($d);
    $d1=round($d);
    $median=($nilai[$d]+$nilai[$d1])/2;
}
echo "Median : $median \n";
//MODUS
$a=array_count_values($nilai);
foreach ($a as $modus => $n) {
    if($n==max($a)){
    echo "MODUSNYA ADALAH [ $modus ] DENGAN JUMLAH : [ $n ] \n";
    }
}
?>