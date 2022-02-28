<?php

class Vehiculo {

    public function arrancar(){
        echo("<p>estoy arrancando el vehículo</p>");
    }

    public function matricular(){
        echo("<p>matricular el vehículo son 500 euros</p>");
    }

    public function rapidez($velocidad){
        echo("<p>el vehículo va a una velocidad de ".$velocidad."</p>");
    }
}