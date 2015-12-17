<?php
	include("dbConnection.php");
	$con= new Connect();
	$users = $con -> getUsers();
	$data = array("data" => $users);
	echo json_encode($data);
?>