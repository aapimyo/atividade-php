<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
<form method="get">
Cálculo de idade: <input type="number" name="ano"><br><br>
<input type="submit" value="Calcular">
</form>
<?php 
if(isset($_GET["ano"])){
    $anonasc = $_GET["ano"];
    $anoatual = 2026;
    $idade= $anoatual-$anonasc;

    echo "Sua idade é: $idade.";
}
 ?> 
</body>
</html>