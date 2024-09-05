<?php  

session_start();
error_reporting(~E_NOTICE);
$con = mysqli_connect("localhost" , "root" , "" , "final_project");

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
         $_SESSION['id'] =  $result['id'] ;

  

      }

   }

    if( isset($_POST["btn-cust-register"]) )
    {
        $CUSTOMBER_NAME = $_POST["Cus_name"] ;
        $CUSTOMBER_EMAIL = $_POST["Cus_mail"] ;
        $ADDRESS = $_POST["Cus_street"] . " " . $_POST["Cus_City"] . " " .   $_POST["Cus_landmark"] ;
        $CUSTOMBER_Pincode = $_POST["Cus_pincode"] ;
        $CUSTOMBER_PHONE = $_POST["Cus_phone"] ;
        $CUSTOMBER_PASS = $_POST["Cus_password"] ;
        mysqli_query( $con , " INSERT INTO `customer_details`( `cust_name`, `cust_email`, `cust_pass`, `cust_phone`, `cust_pincode`, `cust_address`) 
        VALUES ('$CUSTOMBER_NAME','$CUSTOMBER_EMAIL','$CUSTOMBER_PASS','$CUSTOMBER_PHONE',' $CUSTOMBER_PHONE ','$ADDRESS') ");
      
      $_SESSION['pincode'] =  $CUSTOMBER_Pincode  ;
      $_SESSION['name'] =  $CUSTOMBER_NAME ;
      $_SESSION['pass'] =   $CUSTOMBER_PASS  ;
      $_SESSION['mail'] =  $CUSTOMBER_EMAIL ;
      $_SESSION['address'] =  $ADDRESS;
      $_SESSION['number'] =  $CUSTOMBER_PHONE;
      $_SESSION['user-type'] = "Customer";

      $tempMAIL =   $_SESSION['mail'];
      $tempPASS = $_SESSION['pass'] ; 
      $querry =  "SELECT * FROM `customer_details` WHERE cust_email = '$tempMAIL' && cust_pass = '$tempPASS' ";
       $sql = mysqli_query( $con ,  $querry  );
      
       $result =  mysqli_fetch_array( $sql );

       $_SESSION['id'] =  $result['id'];
  
  }

   

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title> Customer HomePage </title>
  </head>
  <body>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="image/logo.png" alt="logo" height="70">
        </a>
        <form class="form-inline" method="post" action="Display_Products.php">
     
     <input class="form-control mr-sm-2" name="Key_To_Search" type="text" placeholder="Search" aria-label="Search" style="width: 500px;">

     <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="SearchRequest" >Search</button>
   </form>
        <button class="navbar-toggler nav justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
        
        </div>
        <!-- <form  method="post" action="Customer_Profile.php"> -->
        <div class="navbar-right nav-item">
                <a href="Customer_Profile.php">
                    <img src="image/profile.webp" alt="" class="rounded-circle" height="70">
                </a>
        </div>
      </nav>

      <form method="post" action="Display_Products.php">
        
      <div class="card-group container mt-4">
        <div class="card">
            <div class="card-header">
                <h2 align="center"><b> FRUITS </b></h2>
              </div>
          <img class="card-img-top" src="image/fruits.png" alt="Card image cap">
          <div class="card-body" align="center"> 
            <button class="btn btn-outline-dark my-2 my-sm-0" name="show_fruits" type="submit">BUY NOW</button>
          </div>
        </div>
        <div class="card">
            <div class="card-header">
               <h2 align="center"><b> VEGETABLES</b></h2>
              </div>
          <img class="card-img-top" src="image/vegetables.jpg" alt="Card image cap">
          <div class="card-body" align="center"> 
            <button class="btn btn-outline-dark my-2 my-sm-0" name="show_vegetables" type="submit">BUY NOW</button>
          </div>
        </div>
        
      </div>
      <div class="card-group container mt-4">
      <div class="card">
        <div class="card-header">
           <h2 align="center"><b> BAKREY </b></h2>
          </div>
      <img class="card-img-top" src="image/bakery1.jpg" alt="Card image cap">
      <div class="card-body" align="center"> 
        <button class="btn btn-outline-dark my-2 my-sm-0" name="show_bakery" type="submit">BUY NOW</button>
      </div>
    </div>
    <div class="card">
        <div class="card-header">
           <h2 align="center"><b> VARIETY</b></h2>
          </div>
      <img class="card-img-top" src="image/variety.webp" alt="Card image cap">
      <div class="card-body" align="center"> 
        <button class="btn btn-outline-dark my-2 my-sm-0" name="show_others" type="submit">BUY NOW</button>
      </div>
    </div>
</div>
<br>
<br>
</form>
  </body>
</html>

