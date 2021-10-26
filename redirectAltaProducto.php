<!DOCTYPE html>
<html>
   <head> 
      <?php
         $nombre = $_POST['nombre'];
         $precio = $_POST['precio'];
         $cantidad = $_POST['cantidad'];

         $target_dir = "uploads/";
         $destino = $target_dir.basename($_FILES["imagenProducto"]["name"]);
         $bdUrl = "http://localhost/obligatorio/obligatorioPHP/uploads/";
         $bdDestino = $bdUrl.basename($_FILES["imagenProducto"]["name"]);

         move_uploaded_file($_FILES["imagenProducto"]["tmp_name"], $destino);

         include("conexion.php");
         $link=Conectarse();
         $query="insert into producto(nombre, precio, cantidad, url) VALUES('$nombre', $precio, $cantidad,'$bdDestino')";
         if ($link->query($query) === TRUE) {
            $last_id = $link->insert_id;
         }
         $resultado2=mysqli_query($link,"insert into tiene(idProducto, url) VALUES($last_id, '$bdDestino')");
         $resultado3=mysqli_query($link,"insert into imagen(url) VALUES('$bdDestino')");
         mysqli_close($link);

         $url = "http://localhost/obligatorio/obligatorioPHP/manejoDeProductos.php";
      ?>
      <meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />
   </head>
</html>


