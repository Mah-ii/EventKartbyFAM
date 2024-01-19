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

        body{
            background-image: url("image/gym_log.jpg");
            background-repeat: no-repeat;
            background-size: cover;
           
            }


          form{
            background-color: #fff;
            padding : 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
            font-weight: bold;
        }



    </style>

    

    </head>

    <body>
    
        <div class="conatiner-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="log.php" method="post">
                    <div class="mb-3">
                           <h3>SIGN-IN</h3> 
                    </div>
                    <div class="mb-3">
                      username : 
                      <input type="text" class="form-control" name = "l_username">
                      
                    </div>
                    <div class="mb-3">
                      Password :
                      <input type="text" class="form-control" name="l_pass">
                    </div>
                    
                    <button type="submit" class="btn btn-primary col-12" name="login" style="font-weight:bold">Login</button>
                    <a href="reg.php">SIGN UP here</a>
                    
                </form>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




    </body>
</html>