<?php 
	session_start();
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Admin</title>
</head>
  <body background="../assets/Admin.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
    <form method="post" action="add_donor_v.php">
    	<fieldset>
    
      	<legend style="text-align: center;"><h2>Add Donor</h2></legend>
        <table align="center">
					<tr>
						<td>Donor's Name</td>
						<td><input type="text" name="d_name" value="" ></td>
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
