<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="loginStyle.css"> 
<link rel="stylesheet" href="altaProductoStyle.css"> 

<?php include 'navbarAdmin.php';?>

<div class="wrapper fadeInDown" style="text-align: center !important"> 
  <div class="container blanco">
      <p style="margin-top: 10px" class="h2">Alta de producto</p>
      <form action="redirectAltaProducto.php" method= "POST" enctype="multipart/form-data">
      <?php
          echo "<img class= 'imagen' src='http://localhost/obligatorio/obligatorioPHP/uploads/defaultProduct.png'>"
      ?>
      <input type="file" name="imagenProducto" id="imagenProducto">
      <input required type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre">
      <input required type="text" id="precio" class="fadeIn second" name="precio" placeholder="Precio">
      <input required type="text" id="cantidad" class="fadeIn second" name="cantidad" placeholder="Cantidad">
      
      <input style="margin-top: 40px" type="submit" class="fadeIn fourth" value="Guardar">
  </div>
</div>