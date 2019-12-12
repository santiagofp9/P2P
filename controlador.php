<?php
session_start();
include 'conexion.php';
include 'funciones.php';
$oculto = $_POST['oculto'];// la variable varia su valor dependiendo del value asignado
switch($oculto){
    case 1:
        resgistrarUsu($link);
        break;
    case 2:
        login($link);
        break;
}
    


?>