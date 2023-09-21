<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 6.1</title>
</head>
<body>
    <?php
        class cliente{
            //ATRIBUTOS
            var $nombre;
            var $numero;
            var $peliculas_alquiladas;
            //CONSTRUCTOR
            function __construct($nombre, $numero) {
                $this -> nombre = $nombre;
                $this -> numero = $numero;
                $this -> peliculas_alquiladas = array();
            }
            //DESTRUCTOR
            function __destruct() {
                echo "<br>destruido " . $this -> nombre;
            }
            //METODO
            function dame_numero() {
                return $this -> numero;
            }
        }
        //INSTANCIAS DE LA CLASE(OBJETOS)
        //INSTANCIAMOS UN PAR DE CLIENTES
        $cliente1 = new cliente("Jean", 1);
        $cliente2 = new cliente("Carlos", 564);

        //MOSTRAMOS EL NUMERO DE CADA CLIENTE CREADO
        echo "<br> El identificador del cliente 1 es: " . $cliente1 -> dame_numero();
        echo "<br> El identificador del cliente 2 es: " . $cliente2 -> dame_numero();
    ?>
</body>
</html>