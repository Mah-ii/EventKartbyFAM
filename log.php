<?php


if(isset($_POST['login'])){
    include 'config.php';
    $l_username = $_POST['l_username'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($connection,"SELECT * FROM `member` WHERE username ='$l_username' And pass='$l_pass'");

    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['username'] = $l_username; //session create
        echo "<script>location.href='billing.php'</script>";
        
    }
    else{
        echo "<script>alert('Invalid username and Password!!')</script>";
        echo "<script>location.href='admin-login.php'</script>";
    }
}

?>
