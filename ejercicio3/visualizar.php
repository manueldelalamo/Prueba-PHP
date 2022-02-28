<?php
echo('<link href="estilo.css" type="text/css" rel="stylesheet">');

$conexion=new mysqli("localhost","root","","amazon",3306);
$tabla='select * from clientes';
$resultado=mysqli_query($conexion,$tabla);

//style='border:1px solid black; border-collapse:collapse'
echo("<table> <th>ID</th> <th>Nombre</th>  <th>Precio</th> <th>Unidades</th> <th>Fecha</th>");
    foreach ($resultado as $a){
        echo("<tr>");
        foreach($a as $col_value){
            echo("<td>".$col_value."</td>");
            //style='border:1px solid black'
        }
        echo("</tr>");
    }
        echo("</table>");
