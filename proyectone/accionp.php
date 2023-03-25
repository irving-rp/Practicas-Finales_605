<?php
include "connect.php";
if (ISSET($_POST['btnp'])){
    $NombrePlantel = $conecta->real_escape_string($_POST['nombrep']);
    $ClavePlantel = $conecta->real_escape_string($_POST['clavep']);
    $Direccion = $conecta->real_escape_string($_POST['direccionp']);
    $Telefono = $conecta->real_escape_string($_POST['telefonop']);
    $Res = $conecta->real_escape_string($_POST['responsablep']);
   
    if($NombrePlantel== " " || $ClavePlantel== " " || $Direccion== " " || $Telefono==" " || $Res==" "){
       $Alerta="Puede que haya datos vacios";
    }    
    else{                
        $reg="INSERT INTO plantel(nombrep, clavep, direccion, telefonop, responsablep)VALUES('$NombrePlantel','$ClavePlantel','$Direccion','$Telefono','$Res')";
        $registros=$conecta->query($reg);
        if($registros>0){
            echo "Tu registro se realizo con exito";
        }else{
            echo"Tu registro fallo";
        }
    }  
}

?>