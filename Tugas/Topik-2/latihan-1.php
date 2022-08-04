
<?php

echo "Masukan nilai n: ";
$n =trim(fgets(STDIN));

if($n % 2 !=0){
    echo ($n*3), ", \n";
}
    
else{
    echo ($n*2), ", \n";
}

$r=0;
while($r<=7){
    if($r % 2 !=0){
        echo ($r*3), " ";
        }
    else{
        echo ($r*2), " ";
        }
    $r++;
}


?>
