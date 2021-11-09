<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="feedbackStyle.css"> 

<?php 
  include 'navbarAdmin.php';
  include("conexion.php");

  $link=Conectarse();
  $resultado=mysqli_query($link,"select * from concreta INNER JOIN producto ON concreta.idProducto = producto.idProducto");

  //$resultado=mysqli_query($link,"SELECT * FROM concreta INNER JOIN producto ON concreta.idProducto = producto.idProducto WHERE documento = $documento");
 
  mysqli_close($link);
?>

<div class="container" style="max-width: 1429px !important">
  <div class="card text-center" style="margin-top:30px !important">
    <div class="card-header"> 
      <p style="margin-top: 10px" class="h2"><b>Feedback realizado</b></p><br>
    </div>
    <div class="card-body">
    <?php
        while ($valor = mysqli_fetch_array($resultado)) 
        { 
          $nombreProducto = $valor['nombre'];
          $mensaje = $valor['mensaje'];
            echo "
            <p style='margin-top: 10px' class='h2'><b>$nombreProducto:</b> $mensaje</p><br><hr  >
            ";
        }
      ?>
    </div>
  </div>
</div>
