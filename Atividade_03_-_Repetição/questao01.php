<?php

//    Questão: 01 - Crie um programa que leia um número entre 2 e 20 e gere uma tela com a seguinte configuração:
//    • Digite um número: 4
//    Saída do programa:
//    1
//    12
//    123
//    1234
//    123
//    12
//    1

$numero = 4;
for ($i = 1; $i <= $numero; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
for ($i = $numero - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

?>