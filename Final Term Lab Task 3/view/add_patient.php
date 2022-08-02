<?php 
	session_start();
	require_once "../model/addPatientModel.php";
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Admin</title>
</head>
  <body background="../assets/Admin.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
    <form method="post" action="../controller/add_patient_v.php">
    	<fieldset>
    
      	<legend style="text-align: center;"><h2>Add Patient</h2></legend>
        <table align="center">
					<tr>
						<td>Patient's Name</td>
						<td><input type="text" name="p_name" value="" ></td>
					</tr>
					<tr>
						<td>Admission Date</td>
						<td><input type="text" name="ad_date" value="" ></td>
					</tr>
					<tr>
						<td>Release Date</td>
						<td><input type="text" name="rl_date" value="" ></td>
					</tr>
					<tr>
						<td>Assigned Doctor</td>
						<td><input type="text" name="as_doc" value="" ></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><input type="text" name="stt" value="" ></td>
					</tr>
		  </table>
          <table align="center">
					<tr>
						<td>
							<input type="submit" name="submit" value="Add">
						</td>
					</tr>
		  </table>
		  <table align="center">
					<tr>
						<td>
							<a href="adminProfile.php">
							<input type="button" name="" value="Back">
						    </a>
						</td>
					</tr>
		  </table>				
      </fieldset>
    </form>
  </body>
</html>

<?php 
	}else{
		echo " Please Login Again!!";
	}  
?>