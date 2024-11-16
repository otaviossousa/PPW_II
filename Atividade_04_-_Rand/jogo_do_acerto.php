<h1>Jogo do Acerto</h1>
    <form method="POST">
        <label for="numero">Digite um número entre 1 e 20</label>
        <input type="number" id="numero" name="numero" min="1" max="20" required> <br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numeroDigitado = intval($_POST['numero']);
        $numerosSorteados = [];
        
        // Sorteia 6 números aleatórios entre 1 e 20
        for ($i = 0; $i < 6; $i++) {
            $numerosSorteados[] = rand(1, 20);
        }
        
        // Verifica se o número digitado está nos números sorteados
        if (in_array($numeroDigitado, $numerosSorteados)) {
            $mensagem = "<span style='color: blue; font-weight: bold;'>VOCÊ ACERTOU</span>";
        } else {
            $mensagem = "<span style='color: red; font-weight: bold;'>VOCÊ ERROU</span>";
        }

        echo "<fieldset>";
        echo "<legend>Resultado</legend>";
        echo "<p>$mensagem</p>";
        echo "<p>Número Digitado: $numeroDigitado</p>";
        echo "<p>Números Sorteados: " . implode(" ", $numerosSorteados) . "</p>";
        echo "</fieldset>";
        
    }
    ?>