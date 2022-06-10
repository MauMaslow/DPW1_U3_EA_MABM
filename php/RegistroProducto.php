
<?php
include ("Conexion2.php");

$Clave ="";
$NombreProducto ="";
$Precio ="";

//Consultar

if(isset($_POST['btnConsultar'])){

    $Clave =$_POST['Clave'];
    $existe=0;

    if($Clave==""){

        include('../html/Productos.html');
        echo "<div class= 'error'>
        Ingresa una Clave para realizar la Busqueda"; 
       
    }else{
        $resultado = mysqli_query($conexion, "SELECT*FROM $tabla WHERE Clave = '$Clave'");
        while ($consulta = mysqli_fetch_array($resultado)){
        
            include('../html/Productos.html');
            
            echo "<li class= 'correcto'>".$consulta ['Clave']."</i>";
            echo "<li class= 'correcto'>".$consulta ['NombreProducto']."</i>";
            echo "<li class= 'correcto'>".$consulta ['Precio']."</i>";     
                       

            $existe++;
        }
        if($existe==0){
            include('../html/Productos.html');
        echo "<div class= 'error'>
        El registro no existe"; 
        }
    }
}

//Registrar

if(isset($_POST['btnRegistrar'])){

    $Clave =$_POST['Clave'];
    $NombreProducto =$_POST['NombreProducto'];
    $Precio =$_POST['Precio'];
    
    if($Clave==""||$NombreProducto==""||$Precio==""){
       
        include('../html/Productos.html');
        echo "<div class= 'error'>
        El llenado del campo es obligatorio";   

    }else{
       //Insertar
    mysqli_query($conexion, "INSERT INTO $tabla 
    (Clave,NombreProducto,Precio) 
    values 
    ('$Clave','$NombreProducto','$Precio')");
        include('../html/Productos.html');
        echo "<div class= 'correcto'>
        Se ha Registrado correctamente";  
    }
}

//Actualizar
if(isset($_POST['btnActualizar'])){

$Clave =$_POST['Clave'];
$NombreProducto =$_POST['NombreProducto'];
$Precio =$_POST['Precio'];

if($Clave==""||$NombreProducto==""||$Precio==""){
    
    include('../html/Productos.html');
    echo "<div class= 'error'>
    El llenado del campo es obligatorio";   

}else{
    $existe=0;
    //Consultamos antes
       $resultado = mysqli_query($conexion, "SELECT*FROM $tabla WHERE Clave = '$Clave'");
    while ($consulta = mysqli_fetch_array($resultado)){
          
        $existe++;
    }
        if($existe==0){
            
            include('../html/Productos.html');
            echo "<div class= 'error'>
            El registro no existe"; 
    }else{
    //Actualizar
    $_UPDATE_SQL = "UPDATE $tabla SET 

    Clave ='$Clave' ,
    NombreProducto ='$NombreProducto' ,
    Precio ='$Precio'   

    WHERE Clave = '$Clave'";

    mysqli_query($conexion, $_UPDATE_SQL);

    include('../html/Productos.html');
    echo "<div class= 'correcto'>
    Se ha actualizado el registro";   
    }

}

}


//Eliminar
if(isset($_POST['btnEliminar'])){

$Clave =$_POST['Clave'];
$existe=0;

if($Clave==""){   
    include('../html/Productos.html');
    echo "<div class= 'error'>
    El llenado del campo es obligatorio";   
}else{
    $resultado = mysqli_query($conexion, "SELECT*FROM $tabla WHERE Clave = '$Clave'");
    while ($consulta = mysqli_fetch_array($resultado)){    
        
        $existe++;
    }
    if($existe==0){

        include('../html/Productos.html');
        echo "<div class= 'error'>
        El registro no existe";   
       
    }else{

        //Para eliminar
        $_DELETE_SQL = "DELETE FROM $tabla WHERE Clave = '$Clave'";
        mysqli_query($conexion, $_DELETE_SQL);
        

        include('../html/Productos.html');
        echo "<div class= 'correcto'>
        El registro se ha eliminado con exito";    
    }
}
}

?>


