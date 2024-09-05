<?php
error_reporting(0);
session_start();
$con = mysqli_connect("localhost" , "root" , "" , "final_project");
if( isset($_POST['btn-login-Hawk'] ) )
{
    $tempP = $_POST['temp_pass'] ;
    $tempN = $_POST['temp_name'];

   //  $con = mysqli_connect("localhost" , "root" , "" , "final_project");
   //  $sql = mysqli_query( $con , "select * from customer_details where cust_email = '' ") ;
   $querry = " select * from hawker_details 
   where hawk_name = '$tempN' &&  password = '$tempP' ";
    $sql = mysqli_query( $con ,$querry  ) ;

     if( mysqli_affected_rows($con) < 0)
     {
       echo "INVALID LOGIN";
       header('Location:Hawker_login.php');
       exit;
     
     } 
     else{

       $result = mysqli_fetch_array($sql);

    
       $_SESSION['user-type'] = "Hawker";

      
$querry = "select Hawkid from hawker_details 
        where hawk_name = '$tempN' &&  password = '$tempP'   " ;

        $sql = mysqli_query( $con , $querry);

        $result =  mysqli_fetch_array( $sql );

        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        $_SESSION['Hawk-ID'] =  $result['Hawkid'];


       header('Location:Hawker_DashBoard.php');
       exit;

     }
}


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hawker Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
  </head>
  <body>      
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">HAWKER LOGIN</h1>
                <div class="card-text">

                        <form action="Hawker_login.php" method="post">
                            <div class="form-group" >
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" name="temp_name" class="form-control rom-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password"  name="temp_pass"  class="form-control rom-control-sm" id="exampleInputPassword1" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" name="btn-login-Hawk" class="btn btn-primary btn-block">
                            Sign In 
                        </button>

                        <div class="signup">
                            Don't have an account? <a href="cregister.html"> Create One</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>