<?php
// Questão 06  - Escrever em PHP um site que lê o número de identificação, as 3 notas obtidas por um aluno nas 3 
// verificações e a média dos exercícios que fazem parte da avaliação. Calcular a média de aproveitamento, usando a fórmula:
// MA = (N1 + N2 * 2 + N3 * 3 + ME) / 7
// A atribuição de conceitos obedece a tabela abaixo:
// Média de Aproveitamento Conceito
// 9.0 A
// 7.5 e 9.0 B
// 6.0 e 7.5 C
// 4.0 e 6.0 D
// 4.0 E

$id = isset($_GET['id']) ? $_GET['id'] : '';
$n1 = isset($_GET['n1']) ? (float)$_GET['n1'] : 0;
$n2 = isset($_GET['n2']) ? (float)$_GET['n2'] : 0;
$n3 = isset($_GET['n3']) ? (float)$_GET['n3'] : 0;
$me = isset($_GET['me']) ? (float)$_GET['me'] : 0;

$id = '123';
$n1 = 8.5;
$n2 = 7.0;
$n3 = 9.0;
$me = 8.0;

$ma = ($n1 + $n2 * 2 + $n3 * 3 + $me) / 7;

if ($ma >= 9.0) {
    $conceito = 'A';
} elseif ($ma >= 7.5) {
    $conceito = 'B';
} elseif ($ma >= 6.0) {
    $conceito = 'C';
} elseif ($ma >= 4.0) {
    $conceito = 'D';
} else {
    $conceito = 'E';
}

echo "Número de Identificação: $id<br>";
echo "Média de Aproveitamento: " . number_format($ma, 2, ',', '.') . "<br>";
echo "Conceito: $conceito<br>";
?>