<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="feedbackStyle.css"> 

<?php 
  include 'navbarAdmin.php';
  include("conexion.php");

  $link=Conectarse();
  $resultado=mysqli_query($link,"select * from usuario  where habilitado is NULL");
  mysqli_close($link);
?>

<div class="container" style="max-width: 1429px !important">
  <div class="card text-center" style="margin-top:30px !important">
    <div class="card-header"> 
      <p style="margin-top: 10px" class="h2"><b>Usuarios</b></p><br>
    </div>
    <div class="card-body">
      <?php
          while ($valor = mysqli_fetch_array($resultado)) 
          { 
            $nombre = $valor['nombre'];
            $apellido = $valor['apellido'];
            $documento = $valor['documento'];
            $edad = $valor['edad'];
            echo "
              <form>
                <div class='form-group'>
                  <div class='row'>
                    <div class='col'>
                      <h4  style='margin-top: 10px; text-align: left' ><b>$nombre $apellido, $edad años, CI $documento</b></h4>
                    </div>
                    
                    <div class='col' style=' text-align:right !important' >
                      <form style='float: right !important; margin-right: 15px' action= 'redirectAceptarUsuario.php' method='POST'>
                        <input type='hidden' name='documento' value='$documento'>
                        <button class='btn' type='submit'><img id='function' class= 'icon hover' src='./open-iconic/svg/check-lg.svg'></button>
                      </form>
                      <form style='float: right !important;' action= 'redirectRechazarUsuario.php' method='POST'>
                        <input type='hidden' name='documento' value='$documento'>
                        <button class='btn' type='submit'><img id='function' class= 'icon hover' src='./open-iconic/svg/x-circle.svg'></button>
                      </form>
                    </div>
                  </div>
                </div>
              </form>
              <hr>
              ";
            }
      ?>
    </div>
  </div>
</div>
