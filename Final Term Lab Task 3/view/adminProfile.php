<?php 
	session_start();
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>

<html>
<head>
<title>Admin Profile</title>
</head>
<body background="../assets/acover.jpg" link="#ffffff" alink="black" vlink="black" >
	<form>
		<fieldset>
			<br><br>
			<legend style="text-align: center;"><h1>Welcome to Admin Profile</h1></legend>
			<table align="center">
				<tr>
					<td>
						<a href="authorization.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="User Authorization"></h3></a>
					</td>
					<td>
						<a href="block_profile.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Block Profile"></h3></a>
					</td>
					<td>
						<a href="docinfo.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Doctor Information"></h3></a>
					</td>
					<td>
						<a href="transaction.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Transactions Record"></h3></a>
					</td>
					<td>
						<a href="add_donor.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Add Blood Donor"></h3></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="patientinfo.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Patient Information"></h3></a>
					</td>
					<td>
						<a href="leaveapplication.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Leave Application"></h3></a>
					</td>
					<td>
						<a href="add_patient.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Add Patients"></h3></a>
					</td>
					<td>
						<a href="complain.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Complain/Query"></h3></a>
					</td>
					<td>
						<a href="add_doc.php"><h3><input type="button" style="height: 100px; width: 150px;" name="" value="Add Doctors"></h3></a>
					</td>
				</tr>
			</table>
			<table align="center">
				<tr>
					<td>
						<a href="../controller/alogout.php"><h4><input type="button" style="height: 100px; width: 150px;" name="" value="Logout"></h4></a>
					</td>
				</tr>
			</table>
			<br><br>
		</fieldset>
	</form>
</body>
</html>

<?php 
	}else{
		echo " Please Login Again!!";
	}  
?>