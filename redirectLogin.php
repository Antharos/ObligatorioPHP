<!DOCTYPE html>
<html>
   <head> 
      <?php
         
         $documento = $_POST['documento'];
         $contra = $_POST['contra'];
         $tipoUsuario = "";

         session_start();
         $_SESSION["documento"]=$documento;

         include("conexion.php");
         $link=Conectarse();
         session_start();
         $_SESSION['documento']=$documento;

         $resultado=mysqli_query($link,"SELECT * FROM usuario WHERE (documento='$documento' AND contra='$contra')");
         if(!$resultado){
            $url = "http://localhost/obligatorio/obligatorioPHP/login.php";
         }else{
            while($filas = mysqli_fetch_array($resultado)){
               $tipoUsuario= $filas["tipoUsuario"];
               $_SESSION["nombreUsuario"]=$filas["nombre"]." ".$filas["apellido"];
            }
            if($tipoUsuario == "Administrador"){
               $url = "http://localhost/obligatorio/obligatorioPHP/manejoDeProductos.php";
            }else{
               $url = "http://localhost/obligatorio/obligatorioPHP/listadoDeProductosCliente.php";
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
      ?>
      
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


