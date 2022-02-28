<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conexión a fuente de datos (MySQL)</h2>
    <ul>
        <li>extensión mysql (obsoleto)</li>
        <li>extensión mysqli (nativa)</li>
        <li>extensión PDO</li>
    </ul>
    <p>CRUD : create read update delete : insertar,
    select, actualizar y eliminar</p>
    <form action="alta.php" method="post">
        <input type="text" name="nombre" placeholder="dime el producto"><br>
        <input type="number" name="unidades" placeholder="dime las unidades"><br>
        <input type="number" step="any" name="precio" placeholder="dime el precio"><br>
        <input type="date" name="fecha" placeholder="dime la fecha"><br>
        <input type="submit" value="enviar">
    </form>
    <input type="button" value="Borrar Registros"
    onclick="document.location.href='borrar.php'">
    <?php
    // //conexión a la tabla de la base de datos de mysql
    // $conexion=new mysqli("localhost","root","","amazon",3306);
    // echo($conexion->host_info);
    // $resultado=$conexion->query("select * from productos");
    // print_r($resultado);
    // while ($fila=$resultado->fetch_array()) {
    //     echo("<p>".$fila['nombre']."</p>");
    // }
    ?>
</body>
</html>