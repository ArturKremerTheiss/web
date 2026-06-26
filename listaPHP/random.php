<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .container{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        font-size:30pt;
    }
  </style>
</head>
<body>
    
</body>
</html>
<form method = "GET">
    <h1>informe o intervalo</h1>
    <label for="input">Valor Minimo:</label>
    <input type="text" id="inputa" name="a">
      <?php if(!isset($_GET["a"])){echo $_GET["a"];} ?>
    <br>
    <label for="inputb">Valor Maximo:</label>
    <input type="text" id="inputb" name="b">

    <input type="submit" value="Enviar">
</form>
<div class="container">
<?php
if(!isset($_GET["a"])&& !isset($_GET["b"])){
    exit();
}
if(trim($_GET["a"])=="" || trim($_GET["b"])==""){
    exit();
}
$valormin=$_GET["a"];
$valormax=$_GET["b"];
$random= rand($valormin,$valormax);
echo $random;

?>
</div>