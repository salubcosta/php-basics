<?php

function show($text = ""){
    echo("<h1>{$text}</h1>");
}
// show("Salumão Barbosa da Costa");

function sum($a=0, $b=0){
    return $a+$b;
}
echo sum(13, 7);
