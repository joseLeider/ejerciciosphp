<!--OPERADORES RELACIONALES O DE COMPARACION-->
<!--Permiten evaluar si dos valores guardan alguna relacion entre si -->

<?php

if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if($valorA > $valorB){
        echo "El valor A es mayor que el valor B";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionales</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>