<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
</head>
<body>
    <form method="get">
        <label for="numeros">Informe os números separados por vírgula:</label><br><br>
        <input type="text" id="numeros" name="numeros" value="<?php echo isset($_GET['numeros']) ? $_GET['numeros'] : ''; ?>" style="width: 300px;">
        <input type="submit" value="Somar">
        
        <br><br>

        <?php
            if (isset($_GET['numeros']) && $_GET['numeros'] !== '') {
                $string_enviada = $_GET['numeros'];

                $array_numeros = explode(',', $string_enviada);
                
                $soma = 0;

                foreach ($array_numeros as $numero) {
                    $soma += (float)trim($numero);
                }
                
                echo "<h3>A soma dos números é: <strong>$soma</strong></h3>";
            }
        ?>
    </form>
</body>
</html>