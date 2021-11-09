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
  $resultado=mysqli_query($link,"SELECT * FROM producto");
  mysqli_close($link);
?>
<div class="wrapper fadeInDown">
  <div class="container blanco">
    <div class='row'>
      <?php
        while ($valor = mysqli_fetch_array($resultado)) {
          $url = $valor['url'];
          $nombre = $valor['nombre'];
          $precio = $valor['precio'];
          $idProducto =  $valor['idProducto'];
          $cantidad =  $valor['cantidad'];
            echo "
            <div class='col-4 center'>
              <img class= 'imagen' src='$url'>
              <form action= 'modificarProducto.php' method='POST' style='float: left; display:flex'>
                <input type='hidden' name='idProducto' value='$idProducto'>  
                <input type='hidden' name='nombre' value='$nombre'>
                <input type='hidden' name='precio' value='$precio'>
                <input type='hidden' name='cantidad' value='$cantidad'>
                <input type='hidden' name='url' value='$url'>
                <button class='btn' type='submit'><img id='function' class= 'icon hover' src='./open-iconic/svg/pencil.svg'></button>
              </form>
              <form action= 'manejoDeProductosDelete.php' method='POST'>
                <input type='hidden' name='id' value='$idProducto'>
                <button class='btn' type='submit'><img id='function' class= 'icon hover' src='./open-iconic/svg/trash.svg'></button>
              </form>
              <p>$nombre</p>
              <p>$precio</p>
            </div>"; 
        }
      ?>
    </div>
  </div>
</div>