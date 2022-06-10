
<?php
include ("Conexion2.php");

$ID ="";
$NombreCompleto ="";
$Correo ="";
$Fecha =date("d/m/Y");
$Descripción ="";

//Registrar

if(isset($_POST['btnRegistrar'])){
    
    $NombreCompleto =$_POST['NombreCompleto'];
    $Correo =$_POST['Correo'];    
    $Descripción =$_POST['Descripción'];
    
    if($NombreCompleto==""||$Correo==""||$Descripción ==""){
       
        include('../html/Cotización.html');
        echo "<div class= 'error'>
        El llenado del campo es obligatorio";   

    }else{
       //Insertar
    mysqli_query($conexion, "INSERT INTO $pedidos 
    (NombreCompleto,Correo,Fecha,Descripción) 
    values 
    ('$NombreCompleto','$Correo','$Fecha','$Descripción')");
        include('../html/Cotización.html');
        echo "<div class= 'correcto'>
        Se ha Registrado correctamente";  
    }
}


?>


