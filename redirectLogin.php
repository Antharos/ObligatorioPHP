<!DOCTYPE html>
<html>
   <head> 
      <?php
         $documento = $_POST['documento'];
         $contra = $_POST['contra'];
         $tipoUsuario = "";

         include("conexion.php");
         $link=Conectarse();

         $resultado=mysqli_query($link,"select * from usuario where (documento='$documento' and contra='$contra')"); 
         if(!$resultado){
            $url = "http://localhost/obligatorio/obligatorioPHP/login.php";
         }else{
            while($filas = mysqli_fetch_array($resultado)){
               $tipoUsuario= $filas["tipoUsuario"];
            }
            if($tipoUsuario == "Administrador"){
               $url = "http://localhost/obligatorio/obligatorioPHP/menuPrincipalAdmin.php";
            }else{
               $url = "http://localhost/obligatorio/obligatorioPHP/menuPrincipalCliente.php";
            }
         }

         mysqli_close($link);
      ?>
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


