<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = htmlspecialchars($_POST['usuario'] ?? '', ENT_QUOTES, 'UTF-8');
    $senha = htmlspecialchars($_POST['senha'] ?? '', ENT_QUOTES, 'UTF-8');

    if ($usuario === 'admin' && $senha === 'admin') {
        $_SESSION['logado'] = true;
        $_SESSION['Administrador'] = $usuario;
        header("Location: session-2.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            background-color: #008080;
            color: white;
            padding: 10px;
        }
        .login-box form {
            margin-top: 20px;
        }
        .login-box label {
            display: block;
            margin-bottom: 5px;
        }
        .login-box input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box button {
            width: 48%;
            padding: 10px;
            border: none;
            background-color: #008080;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-box button:hover {
            background-color: #006666;
        }
        .erro {
            color: red;
            margin-bottom: 10px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <h2>Login</h2>
        </div>
        <form action="" method="POST">
            <?php if (!empty($erro)): ?>
                <p class="erro"><?php echo $erro; ?></p>
            <?php endif; ?>
            
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            
            <div style="display: flex; justify-content: space-between;">
                <button type="submit">Entrar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </div>
</body>
</html>