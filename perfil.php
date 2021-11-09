<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="feedbackStyle.css"> 

<?php 
  include 'navbarAdmin.php';
  include("conexion.php");

  session_start();
  $documento=$_SESSION["documento"];

  $link=Conectarse();
  $resultado=mysqli_query($link,"select * from concreta where documento='$documento'");
  $resultadoUsuario=mysqli_query($link,"select * from usuario where documento='$documento'");
  
  while($filas = mysqli_fetch_array($resultadoUsuario)){
    $nombre=$filas["nombre"];
    $apellido=$filas["apellido"];
    $edad=$filas["edad"];
  }

  $nombreCompletoUsuario=$nombre." ".$apellido;
  mysqli_close($link);
?>

  <div class="container" style="max-width: 1429px !important">
  <div class="card text-center" style="margin-top:30px !important">
    <div class="card-header"> 
      <p style="margin-top: 10px" class="h2"><b>Perfil de <?php echo "$nombreCompletoUsuario" ?></b></p><br>
    </div>
    <div class="card-body">
      <form>
        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="exampleInputEmail1">Nombre</label>
              <input disabled value="<?php echo "$nombre" ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col">
              <label for="exampleInputEmail1">Apellido</label>
              <input disabled value="<?php echo "$apellido" ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="row" style="padding-top: 9px !important">
            <div class="col">
              <label  for="exampleInputEmail1">Documento</label>
              <input disabled value="<?php echo "$documento" ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col">
              <label for="exampleInputEmail1">Edad</label>
              <input disabled value="<?php echo "$edad" ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

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
