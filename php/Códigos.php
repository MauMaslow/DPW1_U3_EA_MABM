<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pedidos";

$pedidos="pedidos";

$conexion = mysqli_connect("localhost","root" ,"","pedidos");
if (!$conexion){
    die("No hay conexión: " .mysqli_connect_error());
}


//Consultar
$resultado = mysqli_query($conexion, "SELECT*FROM $pedidos WHERE ID = '$otravariable'");
while ($consulta = mysqli_fetch_array($resultado)){
    $variable = $consulta ['campo_mysql'];
}

//Insertar
mysqli_query($conexion, "INSERT INTO $pedidos (campo1,campo2) values ('$variable1','$variable1')");

//Actualizar
$_UPDATE_SQL = "UPDATE $pedidos SET 
campo1 = '$variable1' ,
campo2 = '$variable2'
    WHERE ID = '$otravariable'";

mysqli_query($conexion, $_UPDATE_SQL);

//Eliminar

$_DELETE_SQL = "DELETE FROM $pedidos WHERE campo_mysql = 'variable'";
mysqli_query($conexion, $_DELETE_SQL);

?>