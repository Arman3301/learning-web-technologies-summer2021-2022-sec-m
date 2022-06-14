<?php 
	
	$date = $_GET['date'];

	if($date == null)
	{
		echo "Date Cannot be empty";
	}else{
		echo "Successful";
	}
?>