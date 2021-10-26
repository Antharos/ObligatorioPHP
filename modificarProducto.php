<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="loginStyle.css"> 
<link rel="stylesheet" href="altaProductoStyle.css"> 

<?php 
  include 'navbarAdmin.php';
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $cantidad = $_POST['cantidad'];
  $url = $_POST['url'];
?>

<div class="wrapper fadeInDown" style="text-align: center !important"> 
  <div class="container blanco">
      <p style="margin-top: 10px" class="h2">Modificar producto</p>
      <form action="redirectModificarProducto.php" method= "POST" enctype="multipart/form-data">
      <?php
          echo "<img class= 'imagen' src='$url'>"
      ?>
      <input type="file" name="imagenProducto" id="imagenProducto">
      <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre" value="<?php$nombre?>">
      <input type="text" id="precio" class="fadeIn second" name="precio" placeholder="Precio" value="<?php$precio?>">
      <input type="text" id="cantidad" class="fadeIn second" name="cantidad" placeholder="Cantidad" value="<?php$cantidad?>">
      
      <input style="margin-top: 40px" type="submit" class="fadeIn fourth" value="Guardar">
  </div>
</div>