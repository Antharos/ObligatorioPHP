<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="loginStyle.css">
<link rel="stylesheet" href="productosStyle.css"> 

<?php 
  include 'navbarAdmin.php';
  include("conexion.php");
?>

<?php
  $link=Conectarse();
  $idProducto = $_POST['id'];
  $resultado=mysqli_query($link,"DELETE FROM producto WHERE idProducto = $idProducto");
  mysqli_close($link);

  $url = "./manejoDeProductos.php"
?>

<meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
