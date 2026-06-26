<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Crie um script em PHP que receba um array de números e calcule:
A soma de todos os números;
O maior número;
O menor número.

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros'];

    $soma = array_sum($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    echo "<h2>Resultados:</h2>";
    echo "<p>Soma: $soma</p>";
    echo "<p>Maior: $maior</p>";
    echo "<p>Menor: $menor</p>";
}
?>  
</body>
</html>