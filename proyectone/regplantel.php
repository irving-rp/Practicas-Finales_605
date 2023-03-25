<?php
error_reporting (0);
include "include/connect.php";
include "accionp.php";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registro | Plantel</title>
</head>
<body>
    
<div class="container m-0 content-justify-center py-2">
<div class="row text-center">
      <h1 class="text-info">Plantel</h1>
    </div>
</div>

<form id="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="POST">
      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="text" name="nombrep" class="form-control" placeholder="Nombre del Plantel" required>
                  </div>
      </div>


      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="text" name="clavep" class="form-control" placeholder="Clave del Plantel" required>
                  </div>
      </div>


      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                        <textarea class="form-control" name="direccionp" placeholder="Direccion" required></textarea>
                </div>
      </div>

      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="tel" name="telefonop" class="form-control" placeholder="55-54-53-52-51" required>
                  </div>
      </div>


      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="text" name="responsablep" class="form-control" placeholder="Responsable" required>
                  </div>
      </div>

      

      <div class="row text-center">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                         <input type="submit" value="Registrar" name="btnp" class="btn btn-info">
                  </div>
      </div>
</div>
</div>
</div>
</form>

<script src="js/bootstrap.min.css"></script>
</body>
</html>