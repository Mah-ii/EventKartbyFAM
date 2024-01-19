<?php
include 'config.php';

if (isset($_GET['deleteemail'])) {
    $email = $_GET['deleteemail'];

   $stmt = $connection->prepare("DELETE FROM `member` WHERE email = ?");
    
    
    $stmt->bind_param("s", $email);
    
    
    if ($stmt->execute()) {
        echo "Deleted Successfully!!";
    } else {
        die("Connection Failed: " . $connection->error);
    }
    
   
    $stmt->close();
}

$connection->close();
?>





