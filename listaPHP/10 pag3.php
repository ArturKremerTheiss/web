<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);
    $imc_formatado = number_format($imc, 2);

    echo "<h2>Dados Coletados:</h2>";
    echo "<ul>";
    echo "<li>Nome: $nome</li>";
    echo "<li>Email: $email</li>";
    echo "<li>Peso: $peso kg</li>";
    echo "<li>Altura: $altura m</li>";
    echo "<li>IMC: $imc_formatado</li>";
    echo "</ul>";
}
?>

</body>
</html>