<?php include('header.php') ?>
<form class="center_form" role="form"action="deleteUser.php"method="post">
  <div class="form-group">
    <label for="ejemplo_email_1">¿Cual usuario desea eliminar?</label>
    <input type="text" name="usuario" class="form-control" 
           placeholder="Introduce el usuario">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">¿Cual es tu usuario?</label>
    <input type="text" name="verificacion" class="form-control" 
           placeholder="Introduce el usuario">
  </div>
  
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
<?php include("footer.php") ?>