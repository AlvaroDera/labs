<?php
session_start();

if (isset($_REQUEST['usuario']) && isset($_REQUEST['clave'])) {
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    $salt = substr ($usuario, 0, 2);
    $clave_crypt = crypt ($clave, $salt);

    require_once("class/usuarios.php");

    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->validar_usuario($usuario,$clave_crypt);

    foreach ($usuario_validado as $array_resp) {
        foreach ($array_resp as $value) {
            $nfilas=$value;
        }
    }

    if ($nfilas > 0) {
        $usuario_valido = $usuario;
        $_SESSION["usuario_valido"] = $usuario_valido;
    }
}
?>
<!DOCTYPE html public "-//W3C/DTD HTML 4.0//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Laboratorio 14 - Login al sitio Noticias </title>
    <link rel="stylesheet" Type="text/css" href="css/estilo.css">
</head>
<body>
    <?php
    //Sesion iniciada
    if (isset($_SESSION["usuario_valido"])) {
        ?>
        <h1> Gestion de noticias </h1>
        <hr>

        <ul>
            <li><a href="lab142.php"> Listar todas las noticias </a>
            <li><a href="lab143.php"> Listar noticias por partes </a>
            <li><a href="lab144.php"> Buscar noticias </a>
    </ul>

    <hr>
    <p> [ <a href='logout.php'> Desconectar </a> ] </p>
    <?php
    }
    //Intento de entrada fallido
    else if (isset ($usuario)) {
        print ("<br><br>\n");
        print ("<p ALIGN='CENTER'> Acceso no autorizado </p>\n");
        print ("<p ALIGN='CENTER'> [ <a href='login.php'> Conctar </a> ] </p>\n");
    }
    //Sesion no iniciada
    else {
        print ("<br><br>\n");
        print ("<p class='parrafocentrado'> Esta zona tiene el acceso restringido.<br> " . " Para entrar debe identificarse </p>\n");
        print ("<form class='entrada' name='login' action='login.php' method='post'>\n");
        print ("<p><label class='etiqueta-entrada'> Usuario: </label>\n");
        print ("    <input type='text' name='usuario' size='15'></p>\n");
        print ("<p><label class='etiqueta-entrada'> Clave: </label>\n");
        print ("    <input type='password' name='clave' size='15'></p>\n");
        print ("<p><input type='submit' value='entrar'></p>\n");
        print ("</form>\n");
        
        print ("<p class='parrafocentrado'> Nota: Si no dispone de identificacion o tiene problemas " .
            "para entrar <br> pongase en contacto con el " .
            "<a href='mailto:webmaster@localhost'> Administrador </a> del sitio </p>\n");
    }
    ?>
</body>
</html>