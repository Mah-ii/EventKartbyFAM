<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DOCUMENT</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="reg.php" class= "text-light">ADD USER</a></button>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">email</th>
            <th scope="col">username</th>
            <th scope="col">dob</th>
            <th scope="col">address</th>
            <th scope="col">pass</th>
            <th scope="col">phone</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT * FROM `member`";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $email = $row['email'];
                $username = $row['username'];
                $dob = $row['dob'];
                $address = $row['address'];
                $pass = $row['pass'];
                $phone = $row['phone'];

                echo '<tr>
                        <th scope="row">' . $email . '</th>
                        <td>' . $username . '</td>
                        <td>' . $dob . '</td>
                        <td>' . $address . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $phone . '</td>

                        <td>
                        <button class= "btn btn-primary"><a href="update.php?updateemail='.$email.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteemail='.$email.'" class="text-light">Delete</a></button>
            
            
                    </td>

                      </tr>';
                      
            }
        }
        ?>

       
        </tbody>
    </table>
</div>

</body>
</html>
