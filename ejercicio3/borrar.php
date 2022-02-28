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
$tabla='select * from clientes'; 

echo '<FORM METHOD="POST" ACTION="borrar2.php">Nombre<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select nombre From clientes Order By nombre";
$resultado=mysqli_query($conexion,$sSQL);

echo '<select name="nombre">';

//Mostramos los registros en forma de menú desplegable
while ($row=mysqli_fetch_array($resultado))
{
  echo '<option>'.$row["nombre"];
}
mysqli_free_result($resultado)
?>

</select>
<br>
<INPUT TYPE="SUBMIT" value="Borrar">
</FORM>
</div>

</body>
</html>