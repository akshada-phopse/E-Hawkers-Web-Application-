<?php

    // $con = mysqli_connect("localhost" , "root" , "" , "final_project");




session_start();


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
  </head>
  <body>      
    <div class="global-container">
        <div class="card login-form2">
            <div class="card-body">
                <h1 class="card-title text-center">Create Customer Account</h1>
                <div class="card-text">
                    
                        <form method="post" action="Customer_DashBoard.php">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Enter Your Name</label>
                              <input type="text" name = "Cus_name" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email"  name = "Cus_mail" class="form-control rom-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                       </div>
                       
                        <div class="form-group">
                           <label for="exampleInputEmail1">Street </label>
                           <input type="text" name = "Cus_street" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                       </div>
                    <div class="form-group">
                           <label for="exampleInputEmail1">City</label>
                           <input type="text" name = "Cus_City" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pincode</label>
                        <input type="text" name = "Cus_pincode" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Landmark</label>
                    <input type="text" name = "Cus_landmark" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile No</label>
                <input type="text" name = "Cus_phone" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
          </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Create Password</label>
                    <input type="password" name = "Cus_password" class="form-control rom-control-sm" id="exampleInputPassword1" aria-describedby="emailHelp">
                </div>
                        <button type="submit" name="btn-cust-register" class="btn btn-primary btn-block">
                            Sign Up
                        </button>

                        <div class="signup">
                         <a href="Customer_login.php">LogIn</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>