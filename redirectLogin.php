<!DOCTYPE html>
<html>
   <head> 
      <?php
         
         $documento = $_POST['documento'];
         $contra = $_POST['contra'];
         $tipoUsuario = "";

         $url = "http://localhost/obligatorio/obligatorioPHP/login.php";

         session_start();
         $_SESSION["documento"]=$documento;

         include("conexion.php");
         $link=Conectarse();

         $resultado=mysqli_query($link,"SELECT * FROM usuario WHERE (documento='$documento' AND contra='$contra')");
         if($resultado){
            while($filas = mysqli_fetch_array($resultado)){
               $tipoUsuario= $filas["tipoUsuario"];
               $_SESSION["nombreUsuario"]=$filas["nombre"]." ".$filas["apellido"];
            }
            if($tipoUsuario == "Administrador"){
               $url = "http://localhost/obligatorio/obligatorioPHP/manejoDeProductos.php";
            }else{
               if($tipoUsuario == "Cliente"){
                  $url = "http://localhost/obligatorio/obligatorioPHP/listadoDeProductosCliente.php";
               }
            }
         }
         $carrito = array();
         $resultadoProducto=mysqli_query($link,"SELECT * FROM producto");
         while($filas = mysqli_fetch_array($resultadoProducto)){
            $currentID = $filas["idProducto"];
            $carrito[$currentID] = 0;
            
         }
         $_SESSION['carrito'] = $carrito;
         mysqli_close($link);

         if($url == "http://localhost/obligatorio/obligatorioPHP/login.php"){
            $_SESSION['error'] = "true";
         }
      ?>
      
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


