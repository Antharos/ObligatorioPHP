<?php 
  include("conexion.php");
?>

<?php
  session_start();
  $link=Conectarse();

  $carrito = $_SESSION['carrito'];
  $documento = $_SESSION['documento'];
  $mensaje = $_POST['feedback'];
  $today = date("Y/m/d");

  foreach($carrito as $key => $valor)
  {
    if($valor != 0)
    {
      $resultado=mysqli_query($link,"INSERT INTO concreta(documento, idProducto, mensaje, fecha) VALUES('$documento', '$key', '$mensaje','$today')");
    }
  }

  $carrito = array_fill_keys(array_keys($carrito), 0);
  $_SESSION['carrito'] = $carrito;

  $url = "http://localhost/obligatorio/obligatorioPHP/miCarrito.php";
?>


<meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />