<?php include('header.php') ?>
<form class="center_form" role="form"action="addUser.php"method="post">
  <div class="form-group">
    <label for="ejemplo_email_1">Usuario</label>
    <input type="text" name="usuario" class="form-control" 
           placeholder="Introduce el usuario">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Password</label>
    <input type="text" name="pass" class="form-control" 
           placeholder="Introduce tu password">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Nombre</label>
    <input type="text" name="nombre" class="form-control" 
           placeholder="Introduce tu nombre">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Apellido</label>
    <input type="text" name="apellido" class="form-control" 
           placeholder="Introduce tus apellidos">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Codigo especial</label>
    <input type="text" name="admin" class="form-control" 
           placeholder="Codigo">
  </div>
  
  
  <button type="submit" class="btn btn-default">Añadir</button>
</form>
<?php include("footer.php") ?>