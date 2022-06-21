<?php 
	session_start();

	$userid = $_POST['userid'];
	$upassword = $_POST['upassword'];
	$ucpassword = $_POST['ucpassword'];
    $name = $_POST['name'];
    $type = $_POST['type'];

	if($userid == null || $upassword == null || $ucpassword == null || $name == null || $type == null)
	{
		echo "Null Values";
	}

	elseif($type == 'user')
	{
	       $user = $userid."|".$upassword."|".$name."|".$type."\r\n";
		   $file = fopen('user.txt', 'a');
		   fwrite($file, $user);
		   header('location: login.php');
    }
    else{
    	   $user = $userid."|".$upassword."|".$name."|".$type."\r\n";
		   $file = fopen('admin.txt', 'a');
		   fwrite($file, $user);
		   header('location: login.php');
    }
?>