<?php

# Estrutra simples de um laço de repetição while
$count = 1;
while($count <= 10){
    print "{$count}\n";
    $count++;
}

# Calculadora
$n = 1;
while($n <= 10){
    $_n = 1;
    while($_n <= 10){
        echo "{$n} x {$_n} = ".($n*$_n)."\n";
        $_n++;
    }
    echo "\n";
    $n++;
}
