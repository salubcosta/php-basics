<?php

$qtd = 0;
for($i = 1; $i <= 5; $i++){
    if($i % 2 == 0) $qtd++;
}
echo "Quantidade de números pares dentro do laço: {$qtd}";

$frutas = array('Manga', 'Melancia', 'Uva', 'Caju', 'Graviola');

for($i = 0; $i < count($frutas); $i++){
    echo "\n", $frutas[$i];
}

echo "Quantidade de frutas no array:", count($frutas);