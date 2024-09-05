
<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost" , "root" , "" , "final_project");


if( $_SESSION['user-type'] == "Hawker" )
{
  header("Location:Hawker_DashBoard.php");
  exit;
}                             
if( $_SESSION['user-type'] == "Customer" )
{
  header("Location:Customer_DashBoard.php");
  exit;
}

if( isset($_POST['btn-Cust-Login']) )
{
  header("Location:Customer_login.php");
  exit;
}
if( isset($_POST['btn-Cust-Register']) )
{
  header("Location:Customer_register.php");
  exit;
}

if( isset($_POST['btn-Hawk-Login']) )
{
  header("Location:Hawker_login.php");
  exit;
}
if( isset($_POST['btn-Hawk-Register']) )
{
  header("Location:Hawker_register.php");
  exit;
}





?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hawker Registration</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
    <style>
        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
            color: #fff;
        }
    </style>
    
  </head>
  <body>    
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <br>
     <br>
     <br>
     <nav class="navbar navbar-expand-lg navbar-light  navbar-nav navbar-center">
       <h1><b> E-COMMERCE FOR HAWKERS </b></h1>
     </nav>
    <div class="container mt-4">
        <br><br><br><br><br><br><br>
        <form action="index.php" method="post">
        <div class="card-deck" >
            <div class="card border border-dark" align="center">
                <a href="#">
               
                    <img src="image/user.jpg" alt="" class="rounded-circle" height="200">
                </a>

              <div class="card-body">
                <h3 class="card-title"><b> USER </b></h3><br><br>
                <a href="#" >
                    <button class="btn btn-outline-dark my-2 my-sm-0 btn-lg" name="btn-Cust-Login" type="submit"><b> LOGIN </b></button>
                </a>
                <a href="#">
                    <button class="btn btn-outline-dark my-2 my-sm-0 btn-lg" name="btn-Cust-Register" type="submit"><b> REGISTER </b></button>
                </a>
              </div>
            </div>
            <div class="card border border-dark" align="center">
                <a href="#">
                    <img src="image/hawker.png" alt="" class="rounded-circle" height="200">
                </a>
              <div class="card-body">
                <h3 class="card-title"><b> HAWKER</b></h3><br><br>
                <a href="#" >
                    <button class="btn btn-outline-dark my-2 my-sm-0 btn-lg" name="btn-Hawk-Login" type="submit"><b> LOGIN </b></button>
                </a>
                <a href="#">
                    <button class="btn btn-outline-dark my-2 my-sm-0 btn-lg" name="btn-Hawk-Register" type="submit"><b> REGISTER </b></button>
                </a>
              </div>
            </div>
          </div>
      </form>
    </div>

  </body>
</html>