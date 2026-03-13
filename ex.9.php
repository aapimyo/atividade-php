<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
<form method="get">
Graus Celsius: <input type="number" name="n1"><br><br>
<input type="submit" value="Calcular">
</form>
<?php 
if(isset($_GET["n1"])){
    $n1 = $_GET["n1"];
    $f = ($n1*9/5 + 32);

    echo "A conversão de Celsius para Fahrenheit é: $f";
}
 ?>   
</body>
</html>