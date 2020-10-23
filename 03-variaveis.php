<?php

$var = "Salumão Barbosa da Costa \n";

echo $var;

# Variávies não são fixas, o seu conteúdo pode ser alterado.

$var = "Variável modificada \n"; 

echo $var;

echo gettype($var), "\n"; # Tipo da variável

/**
 * Os principais tipos de varáveis no PHP são:
 * "boolean"
 * "integer"
 * "double" (por razões históricas "double" é é retornado no caso de float, e não simplesmente "float")
 * "string"
 * "array"
 * "object"
 * "NULL" 
 */

echo gettype(true),"\n";            # booleano
echo gettype(10),"\n";              # integer
echo gettype(11.1),"\n";            # double
echo gettype("string"),"\n";        # string
echo gettype([1,2]),"\n";           # array
echo gettype((object)[1,1]),"\n";   # objeto
echo gettype(null),"\n";            # null
