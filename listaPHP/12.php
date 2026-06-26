<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Crie um script PHP que leia três números representando os possíveis lados de um triângulo e classifique o triângulo de acordo com os tamanhos dos lados.
Verifique se os valores fornecidos podem formar um triângulo.
Classifique o triângulo como:
Equilátero: Todos os lados são iguais.
Isósceles: Dois lados são iguais.
Escaleno: Todos os lados são diferentes.

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "<p>O triângulo é Equilátero.</p>";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "<p>O triângulo é Isósceles.</p>";
        } else {
            echo "<p>O triângulo é Escaleno.</p>";
        }
    } else {
        echo "<p>Os valores fornecidos não podem formar um triângulo.</p>";
    }
}
?>
</body>
</html>