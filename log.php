<?php include ('dbConnection.php') ?>
<?php 
	if (isset($_POST['usuario']) && $_POST['usuario']!=null ) {
		$usuario = $_POST['usuario'];
	}else {
		header("location: form.php?error=UserMissing");	
		exit;
	}
	if (isset($_POST['pass'])&& $_POST['pass']!=null ) {
		$password = $_POST['pass'];
	}else {
		header("location: form.php?error=PasswordMissing");	
		exit;
	}
	$conn = new Connect();
	$user = $conn->getUser($usuario);
	if ($user['password'] == $password) {
		$_SESSION['usuario'] = $user['usuario'];
		header("location: index.php");	
	}else {
		header("location: form.php?error=WrongPassword");	
	exit;
	}
 ?>