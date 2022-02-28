<?php

echo('<link href="estilo.css" type="text/css" rel="stylesheet">');

$id=null;
$nombre=$_POST['nombre'];
$unidades=$_POST['unidades'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha']; 

$conexion=new mysqli("localhost","root","","amazon",3306);

$insertado=$conexion->query("INSERT INTO `clientes` (`id`, `nombre`, `precio`, `fecha`, `unidades`) VALUES (NULL, '$nombre', '$precio', '$fecha', '$unidades');");

//$insertado=$conexion->query("INSERT INTO productos VALUES (NULL, '".$nombre."', '".$unidades."', '".$precio."', '".$fecha."');");
//$insertado=$conexion->prepare("INSERT INTO productos VALUES (?,?,?,?,?)");//query paramétrica
//$insertado->bind_param('ssids',$id,$nombre,$unidades,$precio,$fecha);
//$insertado->execute();
//echo("dato almacenado ".$insertado->affected_rows);

$tabla='select * from clientes';
$resultado=mysqli_query($conexion,$tabla);

//style='border:1px solid black; border-collapse:collapse'
echo("<table> <th>ID</th> <th>ciudad</th>  <th>unidades</th> <th>usuario</th> <th>fecha</th>");
    foreach ($resultado as $a){
        echo("<tr>");
        foreach($a as $col_value){
            echo("<td>".$col_value."</td>");
            //style='border:1px solid black'
        }
        echo("</tr>");
    }
        echo("</table>");