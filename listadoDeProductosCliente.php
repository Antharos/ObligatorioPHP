<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  $fotos = array("http://localhost/obligatorio/obligatorioPHP/gato1.jpg");
  $test = array(1, 2, 4,5 ,6 ,7,8,9,10);
?>
<div class="wrapper fadeInDown">
  <div class="container blanco">
    <div class='row'>
      <?php
        foreach ($test as $valor) { 
            echo "
            <div class='col-4 center'>
              <img class= 'imagen' src='http://localhost/obligatorio/obligatorioPHP/fotos/gato1.jpg'>
              <input class='cantidad' id='id_form-0-quantity' min='0' name='form-0-quantity' value='1' type='number'>
              <img class= 'icon hover' src='./open-iconic/svg/cart.svg'>
              <p>Nombre</p>
              <p>precio</p>
            </div>"; 
        }
      ?>
    </div>
  </div>
</div>