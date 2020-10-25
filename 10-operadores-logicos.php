<?php

$mediaPadrao = 7;
$frequenciaPadrao = 75;

$mediaAluno = 7.1;
$frenquenciaAluno = 78;

#Operador ternário
$reprovadoPorFaltas = $frenquenciaAluno < $frequenciaPadrao ? true : false;

if(!$reprovadoPorFaltas){
    if($mediaAluno >= $mediaPadrao){
        echo "Aprovado!";
    } else{
        if($mediaAluno >= 4){
            echo "Em recuperação";
        } else{
            echo "Reprovado!";
        }
    }    
} else {
    echo "Reprovado por faltas!";
}
