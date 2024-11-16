<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_destroy();
    header("Location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<style>
    .header-1 {
        background-color: #008b8b;
        color: white;
        padding: 10px;
    }
    .header-2 {
        background-color: #008080;
        color: white;
        padding: 10px;
    }

    .inicio {
        background-color: #008b8b;
        color: white;
        padding: 5px;
        border: none;
    }

    .sair {
        background-color: #008080;
        color: white;
        padding: 5px;
        border: none;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #eeeeee;
    }

    .space{
        background-color: white;
        margin-top: 20px;
    }

</style>
<body>
    <div class="content-box">
        <div class="header">
            <div class="header-1">
                <h1>SisIFPI</h1>
            </div>
            <div class="header-2">
                <button class="inicio"> Inicio</button>
                <button class="sair"> Sair</button>
            </div>
        </div>
    </div>

    <div class="space">
        <br>
    </div>

    <div class="space">
        <?php
        $usuario = $_SESSION['usuario'];

        echo "<p>Usuário  <strong>$usuario</strong>  logado no sistema</p>";
        ?>
    </div>

</body>
</html>