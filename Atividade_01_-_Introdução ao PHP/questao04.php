<?php
// Questão 04  - Faça um algoritmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprimao seu peso ideal, utilizando as seguintes fórmulas:
// • para homens: (72.7 * H) -58
// • para mulheres: (62.1 * H) –44.7


$altura = 1.75;
$sexo = 'm';

if ($sexo == 'm'){
    $peso_ideal = (72.7 * $altura) -58;
}elseif ($sexo == 'f'){
    $peso_ideal = (62.1 * $altura) -44.7;
}

echo "Altura : $altura <br>";
echo "Sexo : $sexo <br>";
echo"Peso Ideal: $peso_ideal";

?>