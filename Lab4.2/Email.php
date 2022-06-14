<?php 
	
	$email = $_GET['email'];

	if($email == null)
	{
		echo "Email Cannot be empty";
	}else{
		echo "Successful";
	}
?>