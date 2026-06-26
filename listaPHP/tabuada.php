<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada Simples</title>
</head>
<body>
    <form method="get">
        <label for="num">Informe um número</label>
        <input type="text" id="num" name="num">
        <input type="submit" value="submeter">
        
        <?php
            if (isset($_GET['num']) && $_GET['num'] !== '') {
                $num = $_GET['num'];
                
                echo "<h3>Tabuada do $num</h3>";
                
                for ($i = 1; $i <= 10; $i++) {
                    echo "$num x $i = " . ($num * $i) . "<br>";
                }
            }
        ?>
    </form>
</body>
</html>