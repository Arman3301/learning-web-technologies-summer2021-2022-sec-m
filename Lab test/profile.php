<?php 


	$file = fopen('user.txt', 'r');
	$data = fread($file, filesize('user.txt'));
	echo $data;
	fclose($file);
?>

<a href="logout.php"> Logout </a>