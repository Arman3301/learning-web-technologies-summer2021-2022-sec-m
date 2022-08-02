<?php 
	session_start();

	$email = $_POST['u_email'];
	$password = $_POST['u_password'];

	if($email == null || $password == null){
		echo "null email/password";
	}else{
		$file = fopen('../model/registration.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($email == trim($user[2]) && $password == trim($user[9])){
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: ../view/userProfile.php');
			}
		}
		echo "invalid user";
	}

?>