<?php
include 'class_lib.php';

$valorDeVenta = $_REQUEST['venta'] ?? 0;

$selector = new Desempeño($valorDeVenta);
echo $selector->obtenerImagen();
?>
