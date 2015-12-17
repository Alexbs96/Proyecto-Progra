<?php include ('dbConnection.php') ?>
<?php 
	$conn = new Connect();
	$user = $_POST['usuario'];
	$pass = $_POST['pass'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cod = $_POST['admin'];
	if ($cod==1996) {
		$rol=1;
		$conn->addUser($nombre, $apellido, $user, $pass, $rol);
		header("location: users.php?task=addedSucessfully");
	}else{
		if ($cod==null) {
		$rol=2;
		$conn->addUser($nombre, $apellido, $user, $pass, $rol);
		header("location: users.php?task=addedSucessfully2");
		}else{
			header("location: addUserFrom.php?task=SomethingWentWrong");
		}
		
	}
	

 ?>