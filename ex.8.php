<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
<form method="get">
Número 1: <input type="number" name="n1"><br><br>
Número 2: <input type="number" name="n2"><br><br>
Número 3: <input type="number" name="n3"><br><br>
<input type="submit" value="Calcular">
</form>
<?php 
if(isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"])){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $media = ($n1+$n2+$n3)/2;

    if ($media >= 7) {
        echo "$media - Aprovado";
    } elseif ($media >= 5) {
        echo "$media - Recuperação";
    } else {
        echo "$media - Reprovado";
    }


}
 ?>
</body>
</html>