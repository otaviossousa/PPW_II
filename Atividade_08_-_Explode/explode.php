<?php

echo "<form method='post' action=''>";
echo "<label for='numeros'>Entre com uma lista de números separados por vírgula para serem somados:</label>";
echo "<input type='text' name='numeros' id='numeros'> <br>";
echo "<input type='submit' value='Enviar'>";
echo "</form>";
echo "<br>";

if(isset($_POST['numeros'])){
    $numeros = explode(",", $_POST['numeros']);
    $soma = array_sum(array_map('floatval', $numeros));
    echo "<strong>Resultado: </strong> $soma";
}

?>