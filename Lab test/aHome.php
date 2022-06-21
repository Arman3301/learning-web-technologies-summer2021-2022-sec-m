<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Admin Home Page</title>
</head>
<body>
	<h1>Welcome!</h1>
	<a href="Profile.php"> Profile </a>
</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>