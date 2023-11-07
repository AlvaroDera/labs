<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Laboratorio 13.4 </title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
    <h1> Eliminar Cookies </h1>
    <?php
    if (isset($_COOKIE["user"])) {
        setcookie("user","",time()+60*5);
        echo "<h3> La cookie 'user' ha sido eliminda satisfactoriamente </h3><br/>";
    } else {
        echo "<h3> La cookie 'contador' no existe </h3><br/>"; 
    }
    ?>
    <a href="lab131.php"> Volver al contador de visitas </a>&nbsp;
    <a href="lab132.php"> Volver al saludo a usuario </a>
</body>
</html>