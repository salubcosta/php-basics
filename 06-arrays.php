<?php

# Criadno um array de forma padrão
$arr = array(40, 200, 150, 180, 'Hey', true);

# Imprime informação sobre uma variável de forma legível
print_r($arr);

# Criando um array e definindo as chaves
$arr = array(
    "Nome" => "Salumão",
    "email" => "salubcosta@gmail.com"
);

print_r($arr);

$arr = [1,2,3,4,5,6,7,8,9,10];

# O var_dump se assemelha ao print_r, no entanto, ele imprime o tipo de cada valor dentro do array
var_dump($arr);

# Dessa forma será adicionado o valor 100 no final do array
$arr[] = 100;

print_r($arr);

# printa o valor na possição 2. No caso => 3. Considerando que a posição inicial é 0.
print_r($arr[2]);