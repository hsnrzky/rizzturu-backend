<?php

for($a=0; $a<=8; $a++){
    for($b=0; $b<=8; $b++){
        if($a+$b<=8 && $a<=$b || $a+$b>=8 && $a>=$b){
            echo "*";
        }
        else{
            echo " ";
        }
    }
    echo "\n";
}
echo "\n";
?>