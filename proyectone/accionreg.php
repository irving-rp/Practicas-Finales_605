<?php
include "conexion.php";
if (ISSET($_POST['btn'])){
    $Nombre = $conecta->real_escape_string($_POST['nombre']);
    $Apellidos = $conecta->real_escape_string($_POST['apellidos']);
    $Direccion = $conecta->real_escape_string($_POST['direccion']);
    $Telefono = $conecta->real_escape_string($_POST['telefono']);
    $FechaNac = $conecta->real_escape_string($_POST['fecha']);
    $Email = $conecta->real_escape_string($_POST['email']);
    if($Nombre== " " || $Apellidos== " " || $Direccion== " " || $Telefono==" " || $FechaNac==" " || $Email== " "){
       $Alerta="Puede que haya datos vacios";
    }    
    else{                
        $reg="INSERT INTO usuarios(Nombre,Apellidos,Direccion,Telefono,FechaNac,Email)VALUES('$Nombre','$Apellidos','$Direccion','$Telefono','$FechaNac','$Email')";
        $registros=$conecta->query($reg);
        if($registros>0){
            echo "Tu registro se hizo con exito";
        }else{
            echo"Algo salio mal con tu registro";
        }
    }  
}


?>