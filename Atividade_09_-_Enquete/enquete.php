<?php
session_start();
// session_destroy();

// Inicializar votos
if (!isset($_SESSION['votos'])) {
    $_SESSION['votos'] = array(0, 0, 0, 0);
}

// Validar e processar o voto
if (isset($_POST['voto']) && is_numeric($_POST['voto'])) {
    $voto = intval($_POST['voto']);
    if ($voto >= 1 && $voto <= 4) {
        $_SESSION['votos'][$voto]++;
    }
}

// Função para renderizar o formulário
function renderForm($enquete)
{
    echo "<fieldset>";
    echo "<legend>Enquete</legend>";
    echo "<h5>" . htmlspecialchars($enquete[0]) . "</h5>";
    echo "<form method='post'>";
    for ($i = 1; $i < count($enquete); $i++) {
        echo "<label>";
        echo "<input type='radio' name='voto' value='$i'> " . htmlspecialchars($enquete[$i]);
        echo "</label><br>";
    }
    echo "<div style='text-align: center;'><input type='submit' value='Votar'></div>";
    echo "</form>";
    echo "</fieldset>";
}

// Função para exibir os resultados
function renderResults($enquete, $votos)
{
    $total = array_sum($votos);
    $cores = ['#ff9999', '#99ccff', '#99ff99', '#ffff99'];

    echo "<fieldset>";
    echo "<legend>Resultado</legend>";
    for ($i = 1; $i < count($enquete); $i++) {
        $porcentagem = ($total > 0) ? ($votos[$i] / $total) * 100 : 0;
        echo htmlspecialchars($enquete[$i]) . ": " . number_format($porcentagem, 2) . "%<br>";
        echo "<hr style='width: " . $porcentagem . "%; background-color: " . $cores[$i - 1] . "; border: none; height: 10px;'><br>";
    }
    echo "</fieldset>";
}

// Dados da enquete
$enquete = [
    "Qual a linguagem de programação você mais gosta?",
    "Python",
    "PHP",
    "Java",
    "C++"
];

// Renderizar a página
echo "<h1 style='background-color: #aaaaaa; text-align: center'>Prova Prática - Enquete</h1>";
renderForm($enquete);
echo "<br><br>";
renderResults($enquete, $_SESSION['votos']);
?>
