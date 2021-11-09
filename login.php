<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="loginStyle.css"> 

<?php  
  session_start();

  if(isset($_SESSION["error"])){
    $error=$_SESSION["error"];
    if($error == "true"){
      //echo'<script type="text/javascript">
      //        alert("Hay un error en la contraseña o documento");
      //    </script>';
    }
  }else{
    $_SESSION['error'] = "false";
  }
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <p style="margin-top: 10px" class="h2">Carrito de compras</p>
    <form action="redirectLogin.php" method= "POST">
      <input type="text" id="documento" class="fadeIn second" name="documento" placeholder="Documento">
      <input type="password" id="contra" class="fadeIn third" name="contra" placeholder="Contraseña">
      <input style="margin-top: 40px"  class="fadeIn fourth" value="Ingresar" type="submit">
      <p style="color: red"> La contaseña o el documento son incorrectos.</p>
    </form>
  </div>
</div>