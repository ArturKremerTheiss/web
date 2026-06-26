<?php
    $numero_sorteado = "";

    if (isset($_POST["minimo"]) && isset($_POST["maximo"])) {

        $minimo = $_POST["minimo"];
        $maximo = $_POST["maximo"];

        $numero_sorteado = rand($minimo, $maximo);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sorteio de Número</title>
</head>
<body>

    <h1>Sorteio de Número Aleatório</h1>

    <form method="POST" action="sorteio.php">

        <label>Número mínimo:</label>
        <input type="number" name="minimo">
        <br><br>

        <label>Número máximo:</label>
        <input type="number" name="maximo">
        <br><br>

        <button type="submit">Sortear</button>

    </form>

    <?php
        if ($numero_sorteado !== "") {
            echo "<h2>Número sorteado: " . $numero_sorteado . "</h2>";
        }
    ?>

</body>
</html>