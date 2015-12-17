<?php include('header.php') ?>
<link rel="stylesheet" href="assets/form/style_form.css">

<form class="center_form" role="form"action="log.php"method="post">
  <div class="form-group">
    <label for="ejemplo_email_1">Usuario</label>
    <input type="text" name="usuario" class="form-control" 
           placeholder="Introduce tu usuario">
  </div>
  <div class="form-group">
    <label for="ejemplo_password_1">Contraseña</label>
    <input type="password" name="pass"class="form-control" id="ejemplo_password_1" 
           placeholder="Contraseña">
  </div>
  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
<?php include("footer.php") ?>
