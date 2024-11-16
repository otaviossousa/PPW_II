<?php

$pratos = [
    [
        'Elemento' => 0,
        'Dia da Semana' => 'Domingo',
        'Prato do dia' => 'Lasanha a quatro queijos',
        'Preço' => 'R$ 12,60'
    ],
    [
        'Elemento' => 1,
        'Dia da Semana' => 'Segunda-feira',
        'Prato do dia' => 'Frango ao molho madeira',
        'Preço' => 'R$ 10,00'
    ],
    [
        'Elemento' => 2,
        'Dia da Semana' => 'Terça-feira',
        'Prato do dia' => 'Arroz à grega',
        'Preço' => 'R$ 09,40'
    ],
    [
        'Elemento' => 3,
        'Dia da Semana' => 'Quarta-feira',
        'Prato do dia' => 'Feijoada à moda da casa',
        'Preço' => 'R$ 11,20'
    ],
    [
        'Elemento' => 4,
        'Dia da Semana' => 'Quinta-feira',
        'Prato do dia' => 'Nhoque paulista',
        'Preço' => 'R$ 08,50'
    ],
    [
        'Elemento' => 5,
        'Dia da Semana' => 'Sexta-feira',
        'Prato do dia' => 'Bacalhau ao forno',
        'Preço' => 'R$ 15,20'
    ],
    [
        'Elemento' => 6,
        'Dia da Semana' => 'Sábado',
        'Prato do dia' => 'Feijão branco',
        'Preço' => 'R$ 10,00'
    ]
];

echo "<table border='1' style='width: 70%; border-collapse: collapse; text-align: left;'>";
echo "<tr style='background-color: #a886e0;'>";
echo "<th>Elemento</th>";
echo "<th>Dia da Semana</th>";
echo "<th>Prato do dia</th>";
echo "<th>Preço</th>";
echo "</tr>";

foreach ($pratos as $prato) {
    echo "<td>" . $prato['Elemento'] . "</td>";
    echo "<td>" . $prato['Dia da Semana'] . "</td>";
    echo "<td>" . $prato['Prato do dia'] . "</td>";
    echo "<td>" . $prato['Preço'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>