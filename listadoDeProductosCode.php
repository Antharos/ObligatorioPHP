<?php
    session_start();

    $id = $_POST['idProducto'];
    $cantidad = $_SESSION['carrito']["$id"];
    $_SESSION['carrito']["$id"] =  $cantidad+1;

    echo "$cantidad";
    $url = "http://localhost/obligatorio/obligatorioPHP/listadoDeProductosCliente.php";
?>
<meta http-equiv="refresh" content=<?php echo "'0; url =".$url."'";?> />