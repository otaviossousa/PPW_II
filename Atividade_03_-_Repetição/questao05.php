<?php
// Questão 05  - A) Escrever um algoritmo que calcula e escreve o produto dos números primos entre 92 e 1478.

$produto = 1;

function ehPrimo($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

for ($i = 92; $i <= 1478; $i++) {
    if (ehPrimo($i)) {
        $produto *= $i;
    }
}

echo "O produto dos números primos entre 92 e 1478 é: $produto";

echo "<br>";

// B) Faça um algoritmo que calcule o fatorial de um número

$numero = 5;
$fatorial = 1;
for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}

echo "<br>O fatorial de $numero é: $fatorial";

?>