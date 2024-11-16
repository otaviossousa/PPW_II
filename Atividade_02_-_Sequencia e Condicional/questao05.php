<?php
// Questão 05  - Uma empresa concederá um aumento de salário aos seus funcionários, variável de acordo com o cargo, 
// conforme a tabela abaixo. Faça um site que leia o salário e o cargo de um funcionário e calcule o novo salário. 
// Se o cargo do funcionário não estiver na tabela, ele deverá, então, receber 40% de aumento. 
// Mostre o salário antigo, o novo salário e a diferença.

$salario = isset($_GET['salario']) ? (float)$_GET['salario'] : 0;
$cargo = isset($_GET['cargo']) ? $_GET['cargo'] : '';

$salario = 5000.00;
$cargo = 'Engenheiro';

$aumentos = [
    'Gerente' => 10,
    'Engenheiro' => 20,
    'Técnico' => 30,
];

$aumentoPercentual = isset($aumentos[$cargo]) ? $aumentos[$cargo] : 40;

$novoSalario = $salario + ($salario * $aumentoPercentual / 100);
$diferenca = $novoSalario - $salario;

echo "Salário antigo: R$ " . number_format($salario, 2, ',', '.') . "<br>";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . "<br>";
echo "Diferença: R$ " . number_format($diferenca, 2, ',', '.') . "<br>";
?>