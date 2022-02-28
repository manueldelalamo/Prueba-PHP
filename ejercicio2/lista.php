<?php

//almacenar una información en memoria : variable
/*$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n4=$_POST['n5'];*/
//almacenar la info en un array
$numeros=array($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4'],$_POST['n5']);

//echo($numeros);
//print($numeros);
print_r($numeros);
echo("El segundo número es ".$numeros[1]);
echo("<br>");
echo("¿Cuántos números tiene el array? ".count($numeros));
echo("<br>");
echo("Dime el total de la suma ".array_sum($numeros));
echo("<br>");
$total=array_sum($numeros);//suma el valor de los elementos
$elementos=count($numeros);//cuanta el número de elementos del array
$promedio=($total/$elementos);
//echo("Promedio de números ".(array_sum($numeros)/count($numeros)));
echo("Promedio de números ".$promedio);