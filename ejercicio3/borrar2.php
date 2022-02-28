<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Conexion con la base
$conexion=new mysqli("localhost","root","","amazon",3306);


//selección de la base de datos con la que vamos a trabajar 
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Delete From Clientes Where nombre='{$_POST["nombre"]}'";
mysqli_query($conexion,$sSQL);
?>

<h1><div >Registro Borrado</div></h1>
<div ><a href="visualizar.php">Visualizar el contenido de la base</a></div>
    
</body>
</html>