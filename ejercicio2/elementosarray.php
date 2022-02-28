<?php

//crear un array que almacena camisa, pantalón, sombreo y abrigo
$productos=array("camisa","pantalón","sombreo","abrigo");
//muestra los datos del array ordenados alfabéticamente
asort($productos);//ordena alfabéticamente
print_r($productos);

/*foreach ($productos as $key => $val) {
    echo("productos[" . $key . "] = " . $val . "<br>");
}*/
echo("<br/>");
//muestra cuántos elementos tiene el array
echo("Elementos del array: ".count($productos));
echo("<br/>");
//elimina el pantalón 
unset($productos[1]);//borrar elemento del array
echo("<br/>");
//muestra de nuevo los elementos actualizados
print_r($productos);