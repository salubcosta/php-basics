<?php

$itsRains = false;

if($itsRains){
    echo 'Stay home!';
} else {
    echo 'Go to pool';
}


# Comparações

$numberOne = 10;
$numberTwo = 25;

# Igualdade
if($numberOne == $numberTwo){
    echo "{$numberOne} == {$numberTwo}";
}

# Diferença
if($numberOne != $numberTwo){
    echo "{$numberOne} != {$numberTwo}";
}

# Maior que. Também pode ser usado assim: >= (maior ou igual)
if($numberOne > $numberTwo){
    echo "{$numberOne} > {$numberTwo}";
}

# Menor que. Também pode ser usado assim: <= (menor ou igual)
if($numberOne < $numberTwo){
    echo "{$numberOne} < {$numberTwo}";
}

/**
 * O if pode ser "aninhado". Segue um exemplo:
 */

if($numberOne > $numberTwo){
    echo "The value {$numberOne} is tall than {$numberTwo}";
} elseif($numberOne < $numberTwo){
    echo "The value {$numberOne} is less than {$numberTwo}";
} else {
    echo "The values are equals!";
}