<?php
/**
 * Strings são cadeias de caracteres
 */
$var1 = 'Salumão';
$var2 = 'Barbosa';

$joinVar = $var1 . ' ' . $var2;

echo $joinVar . "\n";

# Outra forma de concatenar

echo "{$var1} {$var2} \n";

echo strtoupper($joinVar), "\n";

echo strtolower($joinVar);
