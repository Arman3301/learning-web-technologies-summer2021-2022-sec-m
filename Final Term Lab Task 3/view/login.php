<html>
<head>
	<title>Login</title>
</head>
<body background="../assets/Cover.jpg" link="#ffffff" alink="black" vlink="black" >
	<form method="post" action="../controller/loginCheck.php" enctype="">
		<fieldset>
			<legend style="text-align: center;"><h2>LOGIN</h2></legend>
			    <table align="center">
		            <tr>
						<td>Email</td>
						<td><input type="email" name="u_email" value="" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="u_password" value="" ></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="Login" >
						</td>
						<td>
							<a href="home.php"> Register </a>
						</td>
					</tr>
	            </table>
	    </fieldset>
	</form>
</body>
</html>