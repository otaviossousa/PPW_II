<fieldset style="width: 30%; margin: 5% auto;">
    <legend style="text-align: center;"> Calculadora</legend>
    <form action="" method="POST" style="text-align: center;">
        <label for="numero1">1 Numero</label>
        <input type="number" id="numero1" name="numero1" required> <br>
        <label for="numero2">2 Numero</label>
        <input type="number" id="numero2" name="numero2" required> <br>
        <select name="operacao" id="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
</fieldset>


<fieldset style="width: 30%; margin: auto;">
    <legend style="text-align: center;"> Resultado</legend>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = intval($_POST['numero1']);
        $numero2 = intval($_POST['numero2']);
        $operacao = $_POST['operacao'];
        $resultado = 0;
        
        switch ($operacao) {
            case 'soma':
                $resultado = $numero1 + $numero2;
                break;
            case 'subtracao':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacao':
                $resultado = $numero1 * $numero2;
                break;
            case 'divisao':
                $resultado = $numero1 / $numero2;
                break;
        }
        
        echo "<p style='text-align: center;'>$resultado</p>";
    }
    ?>
</fieldset>