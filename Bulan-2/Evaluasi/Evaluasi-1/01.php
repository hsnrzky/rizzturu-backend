<?php

for($n=0; $n<=9; $n++){
    for($m=0; $m<=9; $m++){
        if($n % 2 !=0){
        echo "+";
   }
   else{
    echo "-";
   }
    }
   echo "\n";
} 
echo "\n\n\n";
for($x=0; $x<=9; $x++){
    for($y=0; $y<=9; $y++){
        if($y %2=''=0){
            echo "+";
        }
        else{
            echo "-";
        }
    }
    echo "\n";
}
?>