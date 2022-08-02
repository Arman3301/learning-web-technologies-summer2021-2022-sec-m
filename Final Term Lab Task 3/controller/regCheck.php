<?php 
  session_start();

  $firstname = $_POST['n_fname'];
  $lastname = $_POST['n_lname'];
  $email = $_POST['n_email'];
  $phone = $_POST['n_phone'];
  $address = $_POST['n_address'];
  //$country = $_POST['n_country'];
  $dob = $_POST['n_dob'];
  //$bloodgroup = $_POST['n_bloodgroup'];
  //$genderType = $_POST['gender'];
  $password = $_POST['n_pass'];
  $cpassword = $_POST['n_cpass'];

  if($firstname == null || $lastname == null || $email == null || $phone == null || $address == null || $dob == null || $password == null || $cpassword == null){
    echo "null input";
  }else{
    if($password == $cpassword && strlen($firstname)<6 && strlen($lastname)<7 && strlen($password)<8 && strlen($cpassword)<8){

    $user = $firstname."|".$lastname."|".$email."|".$phone."|".$address."|".$dob."|".$phone."|".$password."|".$email."|".$cpassword."\r\n";
    $file = fopen('../model/registration.txt', 'a');
    fwrite($file, $user);
        header('location: ../view/login.php');
      }else{
        echo "wrong password!!";
      }
  }
?>