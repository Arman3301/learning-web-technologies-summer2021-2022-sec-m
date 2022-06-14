<?php 
	
	$name = $_GET['name'];

	if($name == null)
	{
		echo "Name Cannot be empty";
	}else{
		echo "Successful";
	}
	//elseif()
	//{
	//	echo "Must start with a letter";
	//}
?>