<?php

$sorteados = [3,5,9,13,14,16,17,18,19,20,21,22,23,24,25];

$chutes = [
    "chute1" => [2,4,5,7,8,9,12,15,18,19,21,22,23,24,25],
    "chute2" => [1,2,3,5,8,9,11,12,15,16,17,18,19,22,24],
    "chute3" => [2,3,4,5,7,11,12,13,14,16,17,19,22,24,25],
    "chute4" => [1,3,4,8,9,11,15,16,18,19,20,22,23,24,25],
    "chute5" => [2,5,8,9,10,11,12,14,15,16,19,20,21,24,25],
    "chute6" => [1,4,5,7,9,10,13,14,17,18,19,20,22,24,25],
    "chute7" => [1,2,3,5,9,10,13,14,16,17,18,19,21,24,25],
    "chute8" => [2,4,7,8,10,11,12,15,17,18,19,21,22,24,25],
    "chute9" => [2,4,6,7,8,11,13,15,17,18,19,21,23,24,25],
    "chute10"=> [1,2,6,7,9,10,11,12,13,14,15,18,21,24,25]
];

foreach($chutes as $key => $chute){
    $qtd = 0;
    echo "\n{$key}: ";
    for($i = 0; $i < count($sorteados); $i++){
        for($x = 0; $x < count($chute); $x++){
            if($chute[$i] == $sorteados[$x]){
                echo "{$chute[$i]} ";
                $qtd++;
            }
        }
    }
    echo "#({$qtd})";
}