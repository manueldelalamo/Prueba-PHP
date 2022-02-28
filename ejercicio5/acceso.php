<?php

session_start();

if (isset($_SESSION['email']) && ($_SESSION['pass'])){
    
    echo("<p>contenido reservado para usuarios</p>");
    echo("<p>Bienvenido ".$_SESSION['email']."</p>");
}else {
    echo("<p>Error</p>");
}

