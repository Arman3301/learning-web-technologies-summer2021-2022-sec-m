<?php 
	session_start();

	require_once "../model/userModel.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == null || $password == null){
		echo "null username/password";
	}else{

		$status = login($username, $password);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/home.php');
		}else{
			echo "invalid user";
		}
		
	}

?>