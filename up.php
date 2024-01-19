<?php
include 'config.php';

if (isset($_POST['update'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];

    $sql = "UPDATE `member` SET email='$email', username='$username', dob='$dob', address='$address', pass='$pass', phone='$phone' WHERE email='$email'";
    $query = mysqli_query($connection, $sql);

    if ($query) {
        echo "Data updated successfully";
    } else {
        echo "Error updating data: " . mysqli_error($connection);
    }
}

if(isset($_GET['email'])){

  $email=$_GET['email'];
  $query=  "SELECT * FROM `member` where email='$email'";
  $result=mysqli_query($connection,$query);
  $row=mysqli_fetch_assoc($result);
}else{

  header("Location: display.php");
}



?>