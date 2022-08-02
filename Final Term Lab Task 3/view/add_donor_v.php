<html>
<head>
	<title>Donors</title>
</head>
     <body background="../assets/doccover.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
        <form method="post" action="../controller/adminCheck.php">
    	    <fieldset>
      	    <legend style="text-align: center;"><h1>Donor's Information</h1></legend>
      	    <br><br><br>
                <table align="center">
                	<tr>
                		<td> <h2>
                			<?php 
  
  $name = $_POST['d_name'];

	$file = fopen('../model/donor.txt', 'a');
	$data = $name;
	fwrite($file, $data);
	echo "Added";

	$file = fopen('../model/donor.txt', 'r');
	                        $data = fread($file, filesize('../model/donor.txt'));
	                        echo " ".$data;
	                        fclose($file);

?>
                    </h2>

                		</td>
                	</tr>
					<tr>
						<td align="center">
							<a href="adminProfile.php">
							<input type="button" style="height: 70px; width: 100px;" name="" value="Back">
						    </a>
						</td>
					</tr>
		        </table>
		        <br><br><br>			
            </fieldset>
        </form>
    </body>
</html>