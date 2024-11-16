<?php
// Questão 06  - Escrever um algoritmo que leia um valor X e calcule e mostre os 20 primeiros termos da série:
//1 1 1 1 ..... 
// X X2 X3 X4

$x = 5;

for ($i = 1; $i <= 20; $i++) {
    echo $x ** $i . ' ';
}




?>