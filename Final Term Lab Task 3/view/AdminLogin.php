<html>
<head>
<script>
  function val() 
  {
  let email = document.forms["adminLogin"]["a_email"].value;
  let pass = document.forms["adminLogin"]["a_password"].value;
  if (email == "" || pass == "") {
    alert("Null Input!!!");
    return false;
    }
  }
</script>
	<title>Admin</title>
</head>
  <body background="../assets/Admin.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
    <form name="adminLogin" method="post" action="../controller/adminCheck.php" onsubmit="return val()">
    	<fieldset>
    
      	<legend style="text-align: center;"><h2>Admin Page</h2></legend>
        <table align="center">
					<tr>
						<td>Email</td>
						<td><input type="email" name="a_email" value="" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="a_password" value="" ></td>
					</tr>
		  </table>
		
          <table align="center">
					<tr>
						<td>
							<input type="submit" name="submit" value="Login">
						</td>
					</tr>
		  </table>
		  <table align="center">
					<tr>
						<td>
							<a href="Home.php">
							<input type="button" name="" value="Home Page">
						    </a>
						</td>
					</tr>
		  </table>				
      </fieldset>
    </form>
  </body>
</html>
