<?php

if(array_key_exists('enviar', $_POST)) {
    include('class_lib.php');

    $diam = $_POST['diam'];
    $altu = $_POST['altu'];

    $cil = new Cilindro($diam,$altu);

    $volumen = $cil->calc_volumen();
    $area = $cil->calc_area();

    echo "<br/> El volumen del cilindro es de ". $volumen . " metros cubicos";
    echo "<br/> El area del cilindro es de ". $area . " metros cuadrados";
}
else {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Laboratorio 7.7 </title>
    </head>
    <body>
        <form name="formularioDatos" method="post" action="lab77.php">
            <p> Calculo de volumen y area de un cilindro </p>
            <br/>
            Introduzca el diametro en metros: <input type="text" name="diam" value="">
            <br/><br/>
            Introduzca la altura en metros: <input type="text" name="altu" value="">
            <br/><br/>
            <input value="Calcular" name="enviar" type="submit" />
    </body>
    </html>

    <?php
}
?>