<?php

require_once('modelo.php');

class noticias extends modeloCredencialesBD {
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct() {
        parent::__construct();
    }

    public function consultar_noticias() {
        $instruccion = "CALL sp_listar_noticias()";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las noticias";
        }

        $consulta->close(); // Cierra la consulta
        $this->_db->close(); // Cierra la conexión a la base de datos

        return $resultado;
    }

    public function consultar_noticias_5($limite) {
        $instruccion = "CALL sp_listar_noticias_5('".$limite."')";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las noticias";
        }

        $consulta->close(); // Cierra la consulta
        $this->_db->close(); // Cierra la conexión a la base de datos

        return $resultado;
    }
}

?>