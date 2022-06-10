<?php

function conectar(){

$server = "localhost";
$user = "root";
$pass = "";
$db = "personas";

$con = mysql_connect($server,$user ,$pass) 
or die ("Error de conexión".mysql_error());

mysql_select_db($db,$con);

return $db;

}
?>