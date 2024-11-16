<?php
// Questão 02  - Escrever um programa que lê um valor N inteiro e positivo e que calcula e escreve o valor de E.
// E = 1 + 1 / 1! + 1 / 2! + 1 / 3! + ...... + 1 / N!

$N = 5;
$E = 1;
$F = 1;

for ($i = 1; $i <= $N; $i++) {
    $F = $F * $i;
    $E = $E + 1 / $F;
}

echo "O valor de E é: $E";

?>