<?php 
    require_once "db.php";

    function adminLogin($email, $password){
        $conn = getConnection();
		$sql = "select * from admin where email='{$email}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

?>