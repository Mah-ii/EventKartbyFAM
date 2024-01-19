<?php

include 'config.php';

if (isset($_POST["submit"]))
{
  $email = $_POST["email"]; 
  $pass = $_POST["pass"]; 
  $username = $_POST["username"];
  $dob = $_POST["dob"];
  $address= $_POST["address"];
  $phone = $_POST["phone"];
  $ins = " INSERT into `member`(email,username,dob,address,phone,pass) VALUES('$email', '$username', '$dob', '$address', '$phone', '$pass')";
  $query = mysqli_query($connection, $ins);

  echo "<script>location.href='admin-login.php'</script>";


}

?>