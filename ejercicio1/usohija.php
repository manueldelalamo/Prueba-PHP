<?php

include_once('Vehiculo.php');
include_once('Coche.php');

$coche=new Coche();
$coche->arrancar();
$coche->matricular();
$coche->girarLlave();
$coche->rapidez(120);
