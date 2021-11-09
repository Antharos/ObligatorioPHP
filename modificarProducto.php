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
  $idProducto = $_POST['idProducto'];
?>

<div class="wrapper fadeInDown" style="text-align: center !important"> 
  <div class="container blanco">
      <p style="margin-top: 10px" class="h2">Modificar producto</p>
      <form action="redirectModificarProducto.php" method= "POST" enctype="multipart/form-data">
      <?php
          echo "<img class= 'imagen' src='$url'>"
      ?>
      <div style="display:flex; flex-direction:column; align-items: center"> 
        <h4 style="padding-bottom: 3px">Cambiar imagen principal:</h4>
        <input style="padding-bottom: 12px" type="file" name="imagenPrincipalProducto" id="imagenPrincipalProducto" >
        <h4 style="padding-bottom: 3px">Agregar imágen secundaria:</h4>
        <input style="padding-bottom: 12px" type="file" name="imagenSecundariaProducto" id="imagenSecundariaProducto" >
      </div>

      <input type='hidden' name='idProducto' id="oldUrl" value=<?php echo "'$idProducto'" ?>>  
      <input type='hidden' name='oldUrl' id="oldUrl" value= <?php echo "'$url'" ?>>  
      <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre" value="<?php echo $nombre?>">
      <input type="text" id="precio" class="fadeIn second" name="precio" placeholder="Precio" value="<?php echo $precio?>">
      <input type="text" id="cantidad" class="fadeIn second" name="cantidad" placeholder="Cantidad" value="<?php echo $cantidad?>">
      
      <input style="margin-top: 40px" type="submit" class="fadeIn fourth" value="Guardar">
  </div>
</div>