<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Par ou Ímpar</title>
</head>
<body>
    <form method="get">
        <label for="num">Informe um número</label>
        <input type="text" id="num" name="num">
        <input type="submit" value="submeter">
        
        <?php
            if(!isset($_GET['num']) || $_GET['num'] === ''){
                exit();
            }
            $num = $_GET['num'];
            
            if($num % 2 == 0){
                echo "par";
            } else {
                echo "Ímpar";
            }
        ?>
    </form>
</body>
</html>