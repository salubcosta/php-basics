<?php

# Uma forma reduzida de operador ternário. Chamado coalesce
$var = $_GET['var'] ?? false;

if($var)
    echo $var;
else
    echo 'Sem valores!';
