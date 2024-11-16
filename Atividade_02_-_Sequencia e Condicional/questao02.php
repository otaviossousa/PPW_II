<?php
// Questão 02  - Faça um site php que leia a idade de uma pessoa expressa em dias, mês e ano e mostre-a expressa em anos, meses e dias.
// Data Nascimento: 10/03/2000
// Ex.: você tem 17 anos, 3 meses e 1 dias

$dia = 28;
$mes = 10;
$ano = 2004;

$dataNascimento = new DateTime("$ano-$mes-$dia");
$dataAtual = new DateTime();

$intervalo = $dataAtual->diff($dataNascimento);

echo "Você tem " . $intervalo->y . " anos, " . $intervalo->m . " meses e " . $intervalo->d . " dias.";
?>