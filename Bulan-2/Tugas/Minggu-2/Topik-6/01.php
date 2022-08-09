<?php

for($a=0; $a<9; $a++){
    for($b=0; $b<9; $b++){
        // echo "$b";
        if($b<=$a){
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