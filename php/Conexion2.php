<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pedidos"; //Base de datos

$pedidos="cotización"; //Tabla

$conexion = mysqli_connect($dbhost ,$dbuser ,$dbpass,$dbname);
if (!$conexion){
    die("No hay conexión: " .mysqli_connect_error());
}

?>