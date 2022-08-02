<?php 
    require_once "db.php";

    function add($user){
        $conn = getConnection();
        $sql = "insert into patient values('{$user['name']}','{$user['ad_date']}','{$user['rl_date']}','{$user['as_doc']}','{$user['stat']}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

?>