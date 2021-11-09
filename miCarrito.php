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
  session_start();
  $carrito = $_SESSION['carrito'];
  $link=Conectarse();
  $arrayCarrito = array();

  foreach($carrito as $key => $valor)
  {
    if($valor != 0)
    {
      $resultado = mysqli_query($link,"SELECT * FROM producto WHERE idProducto = $key ");
      while ($valor = mysqli_fetch_array($resultado)) {
        $array = array(
          "idProducto" => $valor['idProducto'],
          "nombre" => $valor['nombre'],
          "precio" => $valor['precio'],
          "cantidad" => $valor['cantidad'],
          "url" => $valor['url'],
    
        );
      }
      array_push($arrayCarrito, $array);
    }
  }
  
?>

<div class="container" style="max-width: 1429px !important">
  <div class="card text-center" style="margin-top:30px !important">
    <div class="card-header"> 
      <p style="margin-top: 10px" class="h2"><b>Carrito de compras</b></p><br>
    </div>
    <div class='row'>
      <?php
        foreach ($arrayCarrito as $valor) 
        { 
          $url = $valor['url'];
          $nombre = $valor['nombre'];
          $precio = $valor['precio'];
          $idProducto = $valor['idProducto'];

            echo "
            <div class='col-4 center'>
              <img class= 'imagen' src='$url'>
              <p>$nombre</p>
              <p>$$precio</p>
            </div>"; 
        }
      ?>
    </div>
    <div style="display:flex" class="center">
      <form action= 'miCarritoCode.php' method='POST'>
        <input style="height:150px; width:600px; margin-top:30px" name="feedback"></input>
        <button type="submit"style="margin-bottom: 20px" class="btn btn-primary">Comprar</button>
      </form>
    </div>
  </div>
</div>