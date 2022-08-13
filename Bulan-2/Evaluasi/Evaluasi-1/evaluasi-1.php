<?php

for ($i=0; $i<9; $i++){
    plus_minus("+", "-", 9);
    kosong(7);
    plus_or_minus("-", "+", 10, $i);
    echo "\n";
}
function plus_minus($a, $b, $c){
    for ($i=0; $i<$c; $i++)if ($i%2==0)echo $a;else echo $b;
}
function kosong($a){
    for ($i=0; $i<$a; $i++)echo " ";
}
function plus_or_minus($a, $b, $c, $d){
    for ($i=0; $i<$c; $i++)if ($d%2==0)echo $a;else echo $b;
}
