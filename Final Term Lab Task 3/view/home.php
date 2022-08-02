<html>
<head>
	<title>Smart Hospital</title>
</head>
    <body background=" ../assets/Cover.jpg" link="#ffffff" alink="black" vlink="black" >
    	<form method="post" action="../controller/regCheck.php" enctype="">
			<fieldset>
				<legend style="text-align: center;"><h2>Registration</h2></legend>
				<table align="center">
					<tr>
						<td>
							<input type="button" name="" value="Patient" >
							<input type="button" name="" value="Doctor">
							<input type="button" name="" value="Blood Bank">
							<a href="AdminLogin.php">
							<input type="button" name="" value="Admin">
						    </a>
						</td>
					</tr>
				</table>
			</fieldset>
			<fieldset>
				<table border=0.5 align="center">

					<tr>
						<td>First Name</td>
						<td><input type="text" name="n_fname" maxlength="6" value="" ></td>
						<td>Last Name</td>
						<td><input type="text" name="n_lname" maxlength="7" value="" ></td>
					</tr>
					<tr>
						<td>Your Email</td>
						<td><input type="email" name="n_email" value="" ></td>
						<td>Your Phone</td>
						<td><input type="number" name="n_phone" value="" ></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="n_address" value="" ></td>
						<td>Country</td>
						<td>
							<select name="n_country">
								<option value="">Bangladesh</option>
								<option value="">India</option>
								<option value="">Pakistan</option>
								<option value="">Bhutan</option>
								<option value="">Nepal</option>
								<option value="">Sri Lanka</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td><input type="date" name="n_dob" value="" ></td>
						<td>Blood Group</td>
						<td>
							<select name="n_bloodgroup">
								<option value="">AB(+ve)</option>
								<option value="">AB(-ve)</option>
								<option value="">A(+ve)</option>
								<option value="">A(-ve)</option>
								<option value="">B(+ve)</option>
								<option value="">B(-ve)</option>
								<option value="">O(+ve)</option>
								<option value="">O(-ve)</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
								<input type="radio" name="gender" value="" > Male
								<input type="radio" name="gender" value="" > female
								<input type="radio" name="gender" value="" > Other
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="n_pass" maxlength="8" value="" ></td>
						<td>Confirm Password</td>
						<td><input type="password" name="n_cpass" maxlength="8" value="" ></td>
					</tr>
					
				</table>
				<table align="center">
					<tr>
						<td>
							<a href="login.php">
							<input type="submit" name="submit" value="Register" >
						</a>
						</td>
					</tr>
				</table>
				<tr>
					<td></td>
				</tr>
				<div align="center"><h3>
			    	<a href="login.php"> Login </h3></a>
			    </div>
            </fieldset>
		</form>
    </body>
</html>

