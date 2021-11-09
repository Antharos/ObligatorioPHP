<!DOCTYPE html>
<html>
   <head> 
      <?php
         $documento = $_POST['documento'];
         
         include("conexion.php");
         $link=Conectarse();

         $queryUpdate="UPDATE usuario SET habilitado='false' WHERE documento=$documento";
         $resultadoUpdate=mysqli_query($link,$queryUpdate);
         mysqli_close($link);

         $url = "http://localhost/obligatorio/obligatorioPHP/usuarios.php";
      ?>
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


