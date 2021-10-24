<!DOCTYPE html>
<html>
   <head> 
      <?php
         $documento = $_POST['documento'];
         $contra = $_POST['contra'];
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $edad = $_POST['edad'];
         $tipoUsuario = "Cliente";

         include("conexion.php");
         $link=Conectarse();
         $resultado=mysqli_query($link,"insert into usuario(documento, contra, nombre, apellido, edad, tipoUsuario) VALUES('$documento', '$contra', '$nombre','$apellido', $edad, '$tipoUsuario')");
         mysqli_close($link);

         $url = "http://localhost/obligatorio/obligatorioPHP/menuPrincipalAdmin.php";
      ?>
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


