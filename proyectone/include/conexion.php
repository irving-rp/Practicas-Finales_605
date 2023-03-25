<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "proyectone";

$conecta = mysqli_connect($servidor, $usuario, $password, $bd);

if($conecta->connect_error){
    die("Conexion fallida con la base de datos".$conecta->connect_error);
};


?>