<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
<form method="get">
Número: <input type="number" name="n"><br><br>
<input type="submit" value="Calcular">
</form>
<?php 
if(isset($_GET['n']) && isset($_GET['n'])!==''){
    $n = $_GET ['n'];
    if ($n % 2 ==0) {
        echo "O número $n é par";
    } else{
        echo "O número $n é impar";
    }
}
 ?>
</body>
</html>