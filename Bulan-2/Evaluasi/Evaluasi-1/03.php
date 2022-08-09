<?php
echo "Data yang ingin di inputkan : ";
$data =trim(fgets(STDIN));
for($x=0; $x<$data; $x++){
    $student = [];
    echo "Nama : ";
    $name =trim(fgets(STDIN));
    echo "NIK : ";
    $nik =trim(fgets(STDIN));
    echo "Jurusan : ";
    $jurusan =trim(fgets(STDIN));
    echo "Divisi : ";
    $divisi =trim(fgets(STDIN));
    echo "Umur : ";
    $age =trim(fgets(STDIN));

    $students = [
        [
            'name' => $name,
            'nik'  => $nik,
            'jurusan' => $jurusan,
            'divisi' => $divisi,
            'age' => $age
        ],
        [
            'name' => $name,
            'nik' => $nik,
            'jurusan' => $jurusan,
            'divisi' => $divisi,
            'age' => $age
        ]
    ];

}
print_r($students);
