<?php  

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gym');

$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);


if(!$connection){
        die("connection Failed :".mysqli_connect_error());
    }else{
            echo "<script>alert('DB connected!!!')</script>";
        }
    
    
?>


