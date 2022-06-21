<?php 
	session_start();

	$id = $_POST['id'];
	$password = $_POST['password'];
	$type = $_POST['type'];

	if($type[3] == 'admin')
	{
		$file = fopen('user.txt', 'r');
		while (!feof($file)) 
		{
			$data=fgets($file);
			$user = explode('|', $data);
			if($id == trim($user[0]) && $password == trim($user[1]) && $type == trim($type[3]))
			{
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: ahome.php');
			}
		}
		echo "invalid user";
	}
	else 
	{
		$file = fopen('user.txt', 'r');
		while (!feof($file)) 
		{
			$data=fgets($file);
			$user = explode('|', $data);
			if($id == trim($user[0]) && $password == trim($user[1]) && $type == trim($type[3]))
			{
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				header('location: uhome.php');
			}
		}
		echo "invalid user";
	}

?>