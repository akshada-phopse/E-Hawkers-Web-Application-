<?php

session_start();
$con = mysqli_connect("localhost" , "root" , "" , "final_project");

// if( isset($_POST['btn-login']) )
// {
//      $tempP = $_POST['temp_pass'] ;
//      $tempE = $_POST['temp_email'];
//     //  $con = mysqli_connect("localhost" , "root" , "" , "final_project");
//     //  $sql = mysqli_query( $con , "select * from customer_details where cust_email = '' ") ;
//      $sql = mysqli_query( $con , "select  from customer_details where cust_email = ' $tempE' and  cust_pass = ' $tempP ' ") ;
//       if( mysqli_affected_rows($con) < 0)
//       {
//         echo "INVALID LOGIN";
//       } 
//       else{
//         $result = mysqli_fetch_array($sql);
//         $_SESSION['temp_pincode'] =  $result['cust_pincode'];
//         $_SESSION['temp_name'] =  $result['cust_name'];
//         $_SESSION['temp_pass'] =  $tempP  ;
//         $_SESSION['temp_email'] =   $tempE ;
//       }
// }



if( isset($_POST['btn-login-Cus']) )
{
     $tempP = $_POST['temp_pass'] ;
     $tempE = $_POST['temp_email'];
    //  $con = mysqli_connect("localhost" , "root" , "" , "final_project");
    //  $sql = mysqli_query( $con , "select * from customer_details where cust_email = '' ") ;
    
     $sql = mysqli_query( $con , "select * from customer_details 
     where cust_email = '$tempE' &&  cust_pass = '$tempP' ") ;

      if( mysqli_affected_rows($con) < 0)
      {
        echo "INVALID LOGIN";
      } 
      else{

        $result = mysqli_fetch_array($sql);
        $_SESSION['pincode'] =  $result['cust_pincode'];
        $_SESSION['name'] =  $result['cust_name'] ;
        $_SESSION['pass'] =  $result['cust_pass'] ;
        $_SESSION['mail'] =  $result['cust_email'] ;
        $_SESSION['address'] =  $result['cust_address'];
        $_SESSION['number'] =  $result['cust_phone'];
       
        $_SESSION['user-type'] = "Customer";

        $tempMAIL =   $_SESSION['mail'];
        $tempPASS = $_SESSION['pass'] ; 
         $sql = mysqli_query( $con , "select id from  customer_details 
         where cust_email = '$tempMAIL' && cust_pass = '$tempPASS'  ");
         $result =  mysqli_fetch_array( $sql );
         $_SESSION['id'] =  $result['id'];


        // header('Location:Customer_DashBoard.php');
        // exit;

      }

   }



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
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">CUSTOMER LOGIN</h1>
                <div class="card-text">

                        <form method="post" action="Customer_DashBoard.php" > 
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="text" name="temp_email" class="form-control rom-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="temp_pass" class="form-control rom-control-sm" id="exampleInputPassword1" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" name="btn-login-Cus" class="btn btn-primary btn-block">
                            Sign In 
                        </button>

                        <div class="signup">
                            Don't have an account? <a href="Customer_register.php"> Create One</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>
