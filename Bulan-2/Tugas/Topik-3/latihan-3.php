<?php
$students = [
    'IT-001' => 'Ridwan',
    'IT-010' => 'Achmad',
    'IT-005' => 'Yusuf',
    'IT-002' => 'Arief',
    'IT-004' => 'Dayat',
    'IT-017' => 'Lutfi',
   ];

//mengurutkan sesuai abjad 
ksort($students);
print_r($students) ;
//urut dari abjad besar ke kecil
   rsort($students);
   foreach($students as $murid){
    echo"$murid\n";
   };
//nama yang paling terakhir   
sort($students);
echo $students [5];