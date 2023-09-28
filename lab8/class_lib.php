<?php
class Desempeño {
    private $venta;

    public function __construct($venta) {
        $this->venta = $venta;
    }

    public function obtenerImagen() {
        if ($this->venta >= 80) {
            return "<img src='img/img1.png'>";
        } else if ($this->venta >= 50 && $this->venta <= 79) {
            return "<img src='img/img2.png'>";
        } else {
            return "<img src='img/img3.png'>";
        }
    }
}
/////////////////////////////////////////////////

class CalculadoraFactorial {
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function calcularFactorial() {
        if ($this->numero <= 0) {
            return "Debes introducir un número mayor a 0.";
        }

        $factorial = 1;
        for ($i = 1; $i <= $this->numero; $i++) {
            $factorial *= $i;
        }

        return "El factorial de {$this->numero} es = {$factorial}";
    }
}
/////////////////////////////////////////////////

class Arreglos {
    private $cantidad;
    private $arreglo;

    public function __construct($cantidad) {
        $this->cantidad = $cantidad;
        $this->arreglo = array();
    }

    public function generarArregloAleatorio() {
        while (sizeof($this->arreglo) != $this->cantidad) {
            array_push($this->arreglo, random_int(1, 100));
            $this->arreglo = array_unique($this->arreglo, SORT_NATURAL);
        }
    }

    public function imprimirArreglo() {
        foreach ($this->arreglo as $elemento) {
            echo $elemento . ' ';
        }
    }

    public function encontrarMayor() {
        for ($i = 1; $i <= sizeof($this->arreglo); $i++) {
            if ($this->arreglo[($i-1)] == max($this->arreglo)) {
                return 'El numero mayor dentro del array es ' . max($this->arreglo) . ' y esta en la posicion ' . $i;
            }
        }
        return '';
    }
}
?>