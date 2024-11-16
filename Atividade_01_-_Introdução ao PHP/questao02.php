<?php
// Questão 02  - Elabore um programa em PHP que, a partir de um número inteiro e positivo, escreva todos os seus divisores. 
// Por exemplo: se o número for 6, os divisores serão: 1, 2, 3 e 6

$numero = 6;

echo"Numero : $numero <br>";
echo "Seus divisores são: ";

for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo $i . " ";
    }
}
    
?>