<?php
// Questão 03  - Construa um site em PHP que, tendo como dados de entrada dois pontos quaisquer no plano,
// P(x1,y1) e P(x2,y2), escreva a distância entre eles. A fórmula que efetua tal cálculo é:entre eles. A fórmula que efetua tal cálculo é:
// D = raiz quadrada de (x2 - x1)² + (y2 - y1)²

$x1 = 2;
$y1 = 3;
$x2 = 5;
$y2 = 7;

$distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

echo "A distância entre os pontos P($x1, $y1) e P($x2, $y2) é: $distancia";

?>