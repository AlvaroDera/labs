<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 8.3</title>
</head>
<body>
<?php
include 'class_lib.php';

if (array_key_exists("enviar", $_POST)) {
    $cantidad = $_POST['num'];
    $lab = new Arreglos($cantidad);
    $lab->generarArregloAleatorio();

    $lab->imprimirArreglo();
    echo '<br><br>' . $lab->encontrarMayor();
} else {
?>
    <form action="Lab83.php" method="POST">
        Ingrese la cantidad de numeros dentro de un array: <input type="text" name="num"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
<?php 
}?>
</body>
</html>
