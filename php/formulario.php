<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "personas";


$conexion = mysqli_connect($dbhost,$dbuser ,$dbpass,$dbname);
if (!$conexion){
    die("No hay conexión: " .mysqli_connect_error());
}

$usuario = $_POST["txtusuario"];
$password= $_POST["txtpassword"];

$query = mysqli_query($conexion, "SELECT * FROM login WHERE usuario = '".$usuario."' and password ='".$password."'"); 
$nr = mysqli_num_rows($query);

if($nr == 1){
    
    echo "Bienvenido: " ;
}
else if($nr== 0)
{
   echo "Usuario no existente, registrese primero "; 
   
}

?>