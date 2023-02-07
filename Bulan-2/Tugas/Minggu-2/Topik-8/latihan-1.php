<?php
for($a=0;$a<9;$a++){
    for($b=0;$b<9;$b++){
        if($a==$b){
            echo $a * 2 + 1 ;
        }
        else {
            echo " ";
        }
    }
    echo "\n";
}
echo "\n";
?>