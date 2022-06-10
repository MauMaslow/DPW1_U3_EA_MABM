<link rel="stylesheet" href="../css/styles.css">
<?php
 
if(isset($_POST['txtnombre'])){
    $nombre = $_POST['txtnombre'];
    $fecha = $_POST['txtFecha'];
    $email = $_POST['email'];
    $insoli = $_POST['area'];
$campos=array();

if($nombre==""){
array_push($campos, "El campo nombre está vacio");
}

if($edad=="" || strlen($edad)>2){
array_push($campos, "El campo Edad debe ser menor o igual a 2 digitos");
}

if($edad<18 || $edad>60){
    array_push($campos, "el rango de edad es de los 18 a los 60 años");
    }



if($email=="" || strpos($email, "@")===false){
array_push($campos, "Ingrese un correo válido");
}

if( $insoli=="" || strlen( $insoli)<0){
    array_push($campos, "El area no puede estar vacio");
    }

if(count($campos)>0){
    include('../html/Cotización.html');
    echo "<div class= 'error'>";
    for($i =0; $i< count($campos); $i++){
        echo "<li>".$campos[$i]."</i>";       
    }
    }else{
include('../html/Cotización.html');
        echo "<div class= 'correcto'>
        Datos correctos ";    
       
    }
    echo "</div>";




}




?>