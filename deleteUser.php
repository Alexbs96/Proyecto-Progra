<?php include ('dbConnection.php') ?>
<?php 
	$conn = new Connect();
	$user = $_POST['usuario'];
	$verifi = $_POST['verificacion'];
	$ver = $conn->getUser($verifi);
	if ($ver['rol']==1) {
		$conn -> deleteUser($user);
		header("location: users.php?task=deletedSucessfully");
	}else{
		header("location: form.php?error=NoPermision");
	}
	
	
	
	

 ?>
