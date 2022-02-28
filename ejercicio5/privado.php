<?php

session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['pass']=$_POST['pass'];


if ($_SESSION['pass']==123456) {
    echo("<p>Bienvenido ".$_SESSION['email']."</p>");
    echo("<a href='acceso.php'>Acceder</a>");
}else {
    echo("<p>Contraseña no válida</p>");
}
