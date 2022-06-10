
<?php
include ("Conexion2.php");

$ID ="";
$NombreCompleto ="";
$Correo ="";
$Fecha ="";
$Descripción ="";

//Consultar

if(isset($_POST['btnConsultar'])){

    $ID =$_POST['ID'];
    $existe=0;

    if($ID==""){

        include('../html/Consulta.html');
        echo "<div class= 'error'>
        Ingresa un ID para realizar la Busqueda"; 
       
    }else{
        $resultado = mysqli_query($conexion, "SELECT*FROM $pedidos WHERE ID = '$ID'");
        while ($consulta = mysqli_fetch_array($resultado)){
        
            include('../html/Consulta.html');
            
            echo "<li class= 'correcto'>".$consulta ['ID']."</i>";
            echo "<li class= 'correcto'>".$consulta ['NombreCompleto']."</i>";
            echo "<li class= 'correcto'>".$consulta ['Correo']."</i>";
            echo "<li class= 'correcto'>".$consulta ['Fecha']."</i>";
            echo "<li class= 'correcto'>".$consulta ['Descripción']."</i>";

            /*
            echo $consulta ['ID']."<br>";
            echo $consulta ['NombreCompleto']."<br>";
            echo $consulta ['Correo']."<br>";
            echo $consulta ['Fecha']."<br>";
            echo $consulta ['Descripción']."<br>";
            */
            $existe++;
        }
        if($existe==0){
            include('../html/Consulta.html');
        echo "<div class= 'error'>
        El registro no existe"; 
        }
    }
}

//Registrar

if(isset($_POST['btnRegistrar'])){

    $ID =$_POST['ID'];
    $NombreCompleto =$_POST['NombreCompleto'];
    $Correo =$_POST['Correo'];
    $Fecha =$_POST['Fecha'];
    $Descripción =$_POST['Descripción'];
    
    if($ID==""||$NombreCompleto==""||$Correo==""||$Fecha=""||$Descripción ==""){
       
        include('../html/Consulta.html');
        echo "<div class= 'error'>
        El llenado del campo es obligatorio";   

    }else{
       //Insertar
    mysqli_query($conexion, "INSERT INTO $pedidos 
    (ID,NombreCompleto,Correo,Fecha,Descripción) 
    values 
    ('$ID','$NombreCompleto','$Correo','$Fecha','$Descripción')");
        include('../html/Consulta.html');
        echo "<div class= 'correcto'>
        Se ha Registrado correctamente";  
    }
}

//Actualizar
if(isset($_POST['btnActualizar'])){

$ID =$_POST['ID'];
$NombreCompleto =$_POST['NombreCompleto'];
$Correo =$_POST['Correo'];
$Fecha =$_POST['Fecha'];
$Descripción =$_POST['Descripción'];

if($ID==""||$NombreCompleto==""||$Correo==""||$Fecha=""||$Descripción ==""){
    
    include('../html/Consulta.html');
    echo "<div class= 'error'>
    El llenado del campo es obligatorio";   

}else{
    $existe=0;
    //Consultamos antes
       $resultado = mysqli_query($conexion, "SELECT*FROM $pedidos WHERE ID = '$ID'");
    while ($consulta = mysqli_fetch_array($resultado)){
          
        $existe++;
    }
        if($existe==0){
            
            include('../html/Consulta.html');
            echo "<div class= 'error'>
            El registro no existe"; 

    }else{

    //Actualizar
    $_UPDATE_SQL = "UPDATE $pedidos SET 

    ID ='$ID' ,
    NombreCompleto ='$NombreCompleto' ,
    Correo ='$Correo' ,
    Fecha ='$   ' ,
    Descripción ='$Descripción' 

    WHERE ID = '$ID'";

    mysqli_query($conexion, $_UPDATE_SQL);

    include('../html/Consulta.html');
    echo "<div class= 'correcto'>
    Se ha actualizado el registro";   


    }

}

}


//Eliminar

if(isset($_POST['btnEliminar'])){

$ID =$_POST['ID'];
$existe=0;

if($ID==""){
   
    include('../html/Consulta.html');
    echo "<div class= 'error'>
    El llenado del campo es obligatorio";   


}else{
    $resultado = mysqli_query($conexion, "SELECT*FROM $pedidos WHERE ID = '$ID'");
    while ($consulta = mysqli_fetch_array($resultado)){
    
        $existe++;
    }
    if($existe==0){

        include('../html/Consulta.html');
        echo "<div class= 'error'>
        El registro no existe";   
       
    }else{

        //Para eliminar
        $_DELETE_SQL = "DELETE FROM $pedidos WHERE ID = '$ID'";
        mysqli_query($conexion, $_DELETE_SQL);
        

        include('../html/Consulta.html');
        echo "<div class= 'correcto'>
        El registro se ha eliminado con exito";    
    }
}
}

?>


