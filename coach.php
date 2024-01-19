<?php

include 'config.php';

if (isset($_REQUEST["submit"]))
{
  $id = $_REQUEST["id"]; 
  $name = $_REQUEST["name"];
  $dob = $_REQUEST["dob"];
  $experience= $_REQUEST["experience"];

  $ins = " INSERT into coach(id,name,dob,experience) VALUES('$id', '$name', '$dob', '$experience')";
  $query = mysqli_query($connection, $ins);



}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale 1.0">

        <title>DOCUMENT</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <style>
         *{
            background-image: url("image/gym.jpg");
            background-repeat: no-repeat;
            background-size: cover;
           
          }

          form{
            color: white;
          }

          .custom-nav .nav-link {
            color: white;
          }


         


    </style>


    </head>

    <body>
        <!--- nav starts--->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="admin-login.php"><img src="image/llll.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#" style="color: white;">Gym Management System<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="billing.php" style="color: white;">Billing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="coach.php" style="color: white;">Coach</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="receiption.php" style="color: white;">Receiption</a>
        </li>
        </ul>
        </div>
        </nav>

        <!---nav end--->

        <!---fom start--->

          <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">ID</label>
      <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="NAME">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date Of Birth</label>
    <input type="text" name="dob" class="form-control" id="inputAddress" placeholder="DOB">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Experience</label>
    <input type="text" name="experience" class="form-control" id="inputAddress2" placeholder="Experience">
  </div>
  <div class="form-group">
  <input type="submit" name="submit"  class="form-control" id="inputddress2" value="Submit" style="color: white;">
      </form>



        <!---form end--->




        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>