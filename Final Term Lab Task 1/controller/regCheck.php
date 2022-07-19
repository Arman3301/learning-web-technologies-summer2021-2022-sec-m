<?php 
	session_start();

    require_once "../model/userModel.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	if($username == null || $password == null || $email == null){
		echo "null username/password/email";
	}else{

		$status = signup($username, $password, $email);

		if($status){
			echo "Done";
		}else{
			echo "Wrong";
		}
	}

	/*$_POST 
	$_REQUEST
	$_SESSION 
	$_SERVER 
	$GLOBALS 
	$_COOKIE*/


?>