<?php

$data = 5956560159466056;

function selectionValue(string $collectionValue): int {
    $array_data = explode("0", $collectionValue);
    $helper = [];
    $banyak_data = 0;
    $sambung = "";
    foreach ($array_data as $data){
        $helper[] = str_split($data);
        sort($helper[$banyak_data]);
        $sambung .= implode($helper[$banyak_data]);
        $banyak_data++;
    }
    return $sambung;
}
echo "Input = ".$data."\n";
echo "Output = ".selectionValue($data)."\n";
echo "\n";