<?php
if(isset($_POST['btnSumar'])){ 
$Numero1 = $_POST['numero1'];
$Numero2 = $_POST['numero2']; 

if(!is_numeric($Numero1)){
echo "El valor asignado a la caja 1 no es un valor numerico";
}
else if(!is_numeric($Numero2)){

echo "El valor asignado a la caja 2 no es un valor numerico";
}
else{ 
$Respuesta = $Numero1 + $Numero2;
echo "El resultado de la suma es: ".$Respuesta;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Operaciones con Php</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="text" name="numero1" placeholder="Digita numero" required> + <input type="text" name="numero2" placeholder="Digita Numero" required> <input type="submit" value="Sumar" name="btnSumar">
</form>
</body>
</html> 