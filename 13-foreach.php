<?php

$pessoas = ['Salumão', 'Joelda', 'Beatriz', 'Shirley', 'Félix'];

# O key é opicional, se quiser usar os índicos do array, basta fazê-lo como abaixo
foreach($pessoas as $key => $p){
    printf($key . ' => '.$p . "\n");
}