<?php
// Questão 04  - Crie um programa que leia um número entre 2 e 20 e gere uma tela com a seguinte configuração:
// Digite um número: 7
// Saída do programa:
// 1234567
// x123456
// xx12345
// xxx1235
// xxxx123
// xxxxx12
// xxxxxx1

$numero = 7;

for ($i = 0; $i < $numero; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "x";
    }
    for ($j = 1; $j <= $numero - $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

?>