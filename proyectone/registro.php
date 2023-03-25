<?php
error_reporting (0);
include "include/conexion.php";
include "accionreg.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Registro</title>
    <script src="js/jquery-3.6.4.min.js"></script>
</head>
<body>
   
<div class="container m-0 content-justify-center py-2">

    <div class="row text-center">
        <h1 class="text-success">Registro</h1>
</div>

<form id="registro" action="<?php echo $_Server['php_Self'];?>" Method="Post">
<div class="row text-center">
  <div class="col sm-12 col-md-12 col-lg-12">
  <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
  </div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
    </div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <textarea class="form-control" name="direccion" placeholder="Direccion"></textarea>
    </div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="telefono" class="form-control" placeholder="55-55-55-55-55" required>
    </div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="date" name="fecha" class="form-control" required>
    </div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="Email" name="email" placeholder="Email" class="form-control" required>
    </div>
</div>

<div class="row text-center">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="submit" value="Registrar" name="btn" class="btn btn-success">
    </div>
</div>

</div>
</div>
</div>
</form>


<script src="js/bootstrap.min.js"></script>
</body>
</html>