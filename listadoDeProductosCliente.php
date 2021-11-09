<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="loginStyle.css">
<link rel="stylesheet" href="productosStyle.css"> 

<?php 
  include 'navbarCliente.php';
  include("conexion.php");
  
?>

<?php
  $link=Conectarse();
  $resultado=mysqli_query($link,"select * from producto");
  mysqli_close($link);
  session_start();
?>
<div class="container" style="max-width: 1429px !important">
  <div class="card text-center" style="margin-top:30px !important">
    <div class="card-header"> 
      <p style="margin-top: 10px" class="h2"><b>Productos disponibles</b></p><br>
    </div>
    <div class='row'>
      <?php
        while ($valor = mysqli_fetch_array($resultado)) 
        { 
          $url = $valor['url'];
          $nombre = $valor['nombre'];
          $precio = $valor['precio'];
          $idProducto = $valor['idProducto'];

            echo "
            <div class='col-4 center'>
              <img class= 'imagen' src='$url'>
              <form action= 'listadoDeProductosCode.php' method='POST'>
                <input type='hidden' name='idProducto' value='$idProducto'>
                <button class='btn' type='submit' name='test'><img id='function' class= 'icon hover' src='./open-iconic/svg/cart.svg'></button>
              </form>
              <p>$nombre</p>
              <p>$precio</p>
            </div>"; 
        }
      ?>
    </div>
  </div>
</div>


