<?php
error_reporting( 0 );
if (isset($_POST [ 'btnsum' ])) {
$numero1 = $_POST [ 'caja1' ];
$numero2 = $_POST [ 'caja2' ];
$numero1 =( int ) $numero1;
$numero2 =( int ) $numero2;
$resultado = $numero1 + $numero2;
$valor = $resultado ;
echo  $valor ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js+"></script>
    <title>Practica 1 | Includes con PHP</title>
</head>
<body>

<!-- navbar  -->

<?php include "include/navbar.php";  ?>

<!-- terminanavbar  -->

<!-- offcanvas -->

<?php include "include/menu.php";  ?>

<!-- terminaoffcanvas -->
   
<div class="col-lg-12">
        <div class="row">
            <h1 class="text-center py-2 text-success">Sumas</h1>
        </div>
        <div class="row">
            <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input type="text" name="caja1" required>
            <input type="text" name="caja2" required>
            <input type="submit" name="btnsum" value="calcular">

           </form>
        </div>
    </div>


<script src="js/bootstrap.min.js"></script> 
</body>
</html>