<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Crie um sistema de login simples em PHP:
Requisitos: O site deve conter um formulário de login que valide o nome de usuário e a senha com valores previamente definidos no código (exemplo: usuário admin e senha 1234).
E  abra uma tela principal informando que o usuário esta logado, caso a sessão esteja aberta.
Criar um botão para quebrar a sessão, caso ela esteja aberta.

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Validação simples
    if ($usuario == "admin" && $senha == "1234") {
        $_SESSION['usuario'] = $usuario;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}

if (isset($_SESSION['usuario'])) {
    echo "<h2>Bem-vindo, " . $_SESSION['usuario'] . "!</h2>";
    echo "<form method='POST' action=''>
            <button type='submit' name='logout'>Sair</button>
          </form>";

    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
} else {
    ?>
    <form method="POST" action="">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <?php
    if (isset($erro)) {
        echo "<p style='color:red;'>$erro</p>";
    }
}
?>

</body>
</html>