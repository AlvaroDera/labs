<?php
    session_start ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Laboratorio 14 - Desconectar </title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <?php
    if (isset($_SESSION["usuario_valido"])) {
        session_destroy ();
        print ("<br><br><p ALIGN='CENTER'> Conexion finalizada </p>\n");
        print ("<p ALIGN='CENTER'>[ <a href='login.php'> Conectar </a> ]</p>\n");
    } else {
        print ("<br><br>\n");
        print ("<p ALIGN='CENTER'> No existe una conexion activa </p>\n");
        print ("<p ALIGN='CENTER'>[ <a href='login.php'> Conectar </a> ]</p>\n");
    }
    ?>
</body>
</html>