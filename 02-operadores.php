<?php
// Operador direto no echo
echo 10-4; //Resposta -> 6
echo 10 - 4; //Resposta -> 6

echo "\n"; //Quebra de linha

print 10-4; //Resposta -> 6
print 10 - 4; //Resposta -> 6

# Outra forma de comentar
echo 4+3-2; # Resposta -> 5

/**
 * Outros operadores:
 * Multiplicação: *.    Exemplo: echo 5*3           = 15
 * Divisão: /.          Exemplo: echo 10/2          = 5
 * Prioridade: ()       Exemplo: echo 3 * (2 + 1)   = 9
 * Exponenciação        Exemplo: echo 2 ** 3        = 8
 * */

echo 3 * (2 + 1);

/**
 * O PHP segue a mesma regra da matemática de prioridades: 
 * 1 - Exponenciação
 * 2 - Parênteses 
 * 3 - Multiplicação e divisão na ordem de leitura
 * 4 - Adição e subtração na ordem de leitura
 * 
 * Divisão por zero gera 
 *  */

 # PHP Warning:  Division by zero in ...
//echo 1/0;

echo "\n";

echo 5 % 2; # Resto da divisão de 5 por 2 é igual a 1.