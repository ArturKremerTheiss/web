<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Intervalo de Números</h1>
    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        echo "<h2>Números no intervalo:</h2>";
        for ($i = $numero1; $i <= $numero2; $i++) {
            echo "<span class='numero'>$i</span> ";
        }
    }
    ?>
</body>
</html>