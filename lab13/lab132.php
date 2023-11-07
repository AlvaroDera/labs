<?php
    if (array_key_exists('enviar', $_POST)) {
        $expire=time()+60*5;
        setcookie("user", $_REQUEST['visitante'] , $expire);
        header("Refresh: 0");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Laboratorio 13.2 </title>
    <link rel="stylesheet" Type="text/css" href="css/estilo.css">
</head>
<body>
    <h1> Creacion de Cookies </h1>
    <h2> La cookie "User" tendra solo 5 min de duracion </h2>
    <?php
    if (isset($_COOKIE["user"])) {
        print("<br/> Hola <b>".$_COOKIE["user"]."</b> gracias por visitar nuestro sitio web<br/>");
    } else {
        ?>
        <form name="formcookie" method="post" action="lab132.php">
            <br/> Hola, primera vez que te vemor por nuestro sitio web ¿Como te llamas?
            <input type="text" name="visitante">
            <input name="enviar" value="Gracias por identificarte" type="submit" /><br/>
    <?php        
    }
    ?>
    <br/><a href="lab133.php"> Continuar... </a>
</body>
</html>