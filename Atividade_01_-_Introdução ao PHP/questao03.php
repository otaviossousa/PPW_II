<?php
// Questão 03  - Faça um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra:
// • salários até 300, reajuste de 50%
// • salários maiores que 300, reajuste de 30%

$salario = 1000;

echo "Salário : $salario <br>";


if ($salario < 300){
    $salario += ($salario * 0.50); 
}else{
    $salario += ($salario * 0.30);
}


echo "Salário Reajustado: $salario";
?>