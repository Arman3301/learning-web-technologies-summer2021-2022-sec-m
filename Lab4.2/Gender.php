<?php 
	
	$gender = $_GET['gender'];

	if($gender == null)
	{
		echo "Gender Cannot be empty";
	}else{
		echo "Successful";
	}
?>