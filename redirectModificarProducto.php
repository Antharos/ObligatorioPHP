<!DOCTYPE html>
<html>
   <head> 
      <?php
         $idProducto = $_POST['idProducto'];
         $nombre = $_POST['nombre'];
         $precio = $_POST['precio'];
         $cantidad = $_POST['cantidad'];
         $oldUrl = $_POST['oldUrl'];
         
         $target_dir = "uploads/";
         $bdUrl = "http://localhost/obligatorio/obligatorioPHP/uploads/";

         include("conexion.php");
         $link=Conectarse();

         //Revisar si el archivo principal esta repetido, o si no lo subió
         if(!file_exists($_FILES['imagenPrincipalProducto']['tmp_name']) || !is_uploaded_file($_FILES['imagenPrincipalProducto']['tmp_name'])) {
            //No subir el archivo ni hacer update con el archivo
            $queryUpdate="UPDATE producto SET nombre='$nombre', precio=$precio, cantidad=$cantidad WHERE idProducto=$idProducto";
         }else{
            $destinoIMGPrincipal = $target_dir.basename($_FILES["imagenPrincipalProducto"]["name"]);
            $bdDestinoIMGPrincipal = $bdUrl.basename($_FILES["imagenPrincipalProducto"]["name"]);
            move_uploaded_file($_FILES["imagenPrincipalProducto"]["tmp_name"], $destinoIMGPrincipal);
            $queryUpdate="UPDATE producto SET nombre='$nombre', precio=$precio, cantidad=$cantidad, url='$bdDestinoIMGPrincipal' WHERE idProducto=$idProducto";

            $resultadoInsert1=mysqli_query($link,"insert into imagen(url) VALUES('$bdDestinoIMGPrincipal')");
            $resultadoInsert2=mysqli_query($link,"insert into tiene(idProducto, url) VALUES($idProducto, '$bdDestinoIMGPrincipal')");
         }
         
         //Revisar si el archivo secundario esta repetido, o si no lo subió
         if(!file_exists($_FILES['imagenPrincipalProducto']['tmp_name']) || !is_uploaded_file($_FILES['imagenPrincipalProducto']['tmp_name'])) {
            //No subir el archivo ni hacer insert con el archivo
         }else{
            $destinoIMGSecundaria = $target_dir.basename($_FILES["imagenSecundariaProducto"]["name"]);
            $bdDestinoIMGSecundaria = $bdUrl.basename($_FILES["imagenSecundariaProducto"]["name"]);
            move_uploaded_file($_FILES["imagenSecundariaProducto"]["tmp_name"], $destinoIMGSecundaria);

            $resultadoInsert3=mysqli_query($link,"insert into tiene(idProducto, url) VALUES($idProducto, '$bdDestinoIMGSecundaria')");
            $resultadoInsert4=mysqli_query($link,"insert into imagen(url) VALUES('$bdDestinoIMGSecundaria')");
         }

         $resultadoUpdate=mysqli_query($link,$queryUpdate);
         mysqli_close($link);

         $url = "http://localhost/obligatorio/obligatorioPHP/manejoDeProductos.php";
      ?>
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


