<?php

include_once('Vehiculo.php');

class Coche extends Vehiculo {

    public function arrancar(){
        echo("<p>estoy arrancando el coche</p>");
    }

    public function girarLlave(){
        echo("<p>estoy girando la llave</p>");
    }
}