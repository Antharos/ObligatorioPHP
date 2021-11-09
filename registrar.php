<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="registrarStyle.css"> 

<div class="wrapper fadeInDown">
  <div id="formContent">
    <p style="margin-top: 10px" class="h2">Registrarse</p>
    <form action="redirectRegistrar.php" method= "POST">
      <input required type="text" id="documento" class="fadeIn second" name="documento" placeholder="Documento">
      <input required type="password" id="contra" class="fadeIn third" name="contra" placeholder="Contraseña">
      <input required type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre">
      <input required type="text" id="apellido" class="fadeIn second" name="apellido" placeholder="Apellido">
      <input required type="text" id="edad" class="fadeIn second" name="edad" placeholder="Edad">
      
      <input type="button" class="fadeIn fourth" id="cancelButton" value="Cancelar" onclick="history.go(-1)">
      <input style="margin-top: 40px" type="submit" class="fadeIn fourth" value="Ingresar">
      
    </form>
  </div>
</div>