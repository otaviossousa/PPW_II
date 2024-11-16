<?php
// Questão 03  - Chico tem 1,50 metro e cresce 2 centímetros por ano, enquanto Zé tem 1,10 metro e cresce 3 centímetros por ano. 
// Construa um algoritmo que calcule e imprima quantos anos serão que calcule e imprima quantos anos serão necessários para que Zé seja maior que Chico.

$chico = 1.50;
$ze = 1.10;
$anos = 0;

while ($ze <= $chico) {
    $chico += 0.02;
    $ze += 0.03;
    $anos++;
}

echo "Serão necessários $anos anos para que Zé seja maior que Chico.";

?>