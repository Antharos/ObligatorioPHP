<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
?>
<div class="wrapper fadeInDown">
  <div class="container blanco">
    <div class='row'>
      <?php
        while ($valor = mysqli_fetch_array($resultado)) 
        { 
          $url = $valor['url'];
          $nombre = $valor['nombre'];
          $precio = $valor['precio'];
            echo "
            <div class='col-4 center'>
              <img class= 'imagen' src='$url'>
              <form action= 'listadoDeProductosCode.php' method='POST'>
                <input class='cantidad' name='cantidad' min='0' name='form-0-quantity' value='1' type='number'>
                <button class='btn' type='submit'><img id='function' class= 'icon hover' src='./open-iconic/svg/cart.svg'></button>
              </form>
              <p>$nombre</p>
              <p>$precio</p>
            </div>"; 
        }
      ?>
    </div>
  </div>
</div>
