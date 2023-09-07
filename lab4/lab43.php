<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> laboratorio 4.3 </title>
</head>
<body>
<?php

if(array_key_exists("enviar",$_POST))
{
    $cant = $_POST['num'];
    $arreglo = array();
    
    while (sizeof($arreglo ) != $cant) {
        array_push($arreglo , random_int(1, 100));
        array_unique($arreglo , SORT_NATURAL);
    }

    foreach ($arreglo  as $e) {
        echo $e . ' ';
    }

for ($i=1; $i <= sizeof($arreglo ) ; $i++) { 
    if($arreglo [($i-1)] == max($arreglo )){
        echo '<br><br>El numero mayor dentro del array es '.max($arreglo ). ' y esta en la posicion '.$i;
    }
}  
}
else{
?>      
    <form action="Lab43.php" method="POST">
        Ingrese la cantidad de numeros dentro de un array: <input type="text" name="num"><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php 
}?>
</body>
</html>