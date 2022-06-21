<html>
<head>
	<title>Smart Hospital</title>
</head>
<body>
	<form method="post" action="regCheck.php" enctype="">
		<fieldset>
			<legend style="text-align: center;"><h2>REGISTRATION</h2></legend>
			    <table align="center">
		            <tr>
						<td>Id</td>
						<td><input type="text" name="userid" value="" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="upassword" value="" ></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="ucpassword" value="" ></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="" ></td>
					</tr>
					<tr>
					<td>User Type</td>
						<td>
								<input type="radio" name="type" value="user" > User
								<input type="radio" name="type" value="admin" > Admin
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="Sign Up" >
						</td>
						<td>
							<a href="login.php"> Sign In </a>
						</td>
					</tr>
	            </table>
	    </fieldset>
	</form>
</body>
</html>