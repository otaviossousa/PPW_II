<?php
// Questão 01  - Faça um programa em PHP com 3 variáveis iniciadas e imprima em ordem crescente.
// • Obs.: O maior valor terá cor vermelha os demais cinza.

$valor1 = 10;
$valor2 = 5;
$valor3 = 7;

if ($valor1 > $valor2 && $valor1 > $valor3) {
    echo "<p style='color: red;'>$valor1</p>";
    if ($valor2 > $valor3) {
        echo "<p style='color: gray;'>$valor3</p>";
        echo "<p style='color: gray;'>$valor2</p>";
    } else {
        echo "<p style='color: gray;'>$valor2</p>";
        echo "<p style='color: gray;'>$valor3</p>";
    }
} elseif ($valor2 > $valor1 && $valor2 > $valor3) {
    echo "<p style='color: red;'>$valor2</p>";
    if ($valor1 > $valor3) {
        echo "<p style='color: gray;'>$valor3</p>";
        echo "<p style='color: gray;'>$valor1</p>";
    } else {
        echo "<p style='color: gray;'>$valor1</p>";
        echo "<p style='color: gray;'>$valor3</p>";
    }
} else {
    echo "<p style='color: red;'>$valor3</p>";
    if ($valor1 > $valor2) {
        echo "<p style='color: gray;'>$valor2</p>";
        echo "<p style='color: gray;'>$valor1</p>";
    } else {
        echo "<p style='color: gray;'>$valor1</p>";
        echo "<p style='color: gray;'>$valor2</p>";
    }
}




?>