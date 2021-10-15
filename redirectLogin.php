<!DOCTYPE html>
<html>
   <head> 
      <?php
         $email = $_POST['email'];
         $apellido = $_POST['contra'];
         $tipoUsuario = "";

         include("conexion.php");
         $link=Conectarse();

         $resultado=mysqli_query($link,"select * from usuario where email='$email'");
         while($filas = mysqli_fetch_array($resultado)){
            $tipoUsuario= $filas["tipoUsuario"];
         }

         if($tipoUsuario == "Administrador"){
            $url = "http://localhost/obligatorio/obligatorioPHP/menuPrincipalAdmin.php";
         }else{
            $url = "http://localhost/obligatorio/obligatorioPHP/menuPrincipalCliente.php";
         }

         mysqli_close($link);
      ?>
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


