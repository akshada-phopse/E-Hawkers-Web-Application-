<?php
session_start();

error_reporting(0);
$con = mysqli_connect("localhost" , "root" , "" , "final_project");



if( isset($_POST["btn-register-Hawk"]) )
{
    $HAWK_NAME = $_POST["Hawk_name"] ;
    $HAWK_NUM = $_POST["Hawk_num"] ;
    $HAWK_PASS = $_POST["Hawk_pass"] ;
    $HAWK_LANDMARK = $_POST["Hawk_landmark"] ;
    $HAWK_PINCODE = $_POST["Hawk_Pincode"] ;
    $HAWK_TYPE = $_POST["Hawk_type"] ;

    mysqli_query( $con , " INSERT INTO  
    hawker_details( `password`, `hawk_name`, `hawk_number`, `Hawk_Landmark`, `Hawk_Pincode`, `Type_of_product`) 
    VALUES ('$HAWK_PASS', '$HAWK_NAME','$HAWK_NUM','$HAWK_LANDMARK','$HAWK_PINCODE','$HAWK_TYPE') " )   ;

$qurry = "select Hawkid from  hawker_details 
where hawk_name = '$HAWK_NAME' && password = '$HAWK_PASS' " ;

$sql = mysqli_query( $con , $qurry );

$result =  mysqli_fetch_array( $sql );


$_SESSION['Hawk-ID'] =  $result['Hawkid'];

    // $_SESSION['name'] = $HAWK_NAME;
    // $_SESSION['pass'] =  $HAWK_PASS ;
    $_SESSION['user-type'] = "Hawker";
    // $_SESSION['pincode'] =  $HAWK_PINCODE;
    // $_SESSION['number'] = $HAWK_NUM;
    // $_SESSION['landmark'] =  $HAWK_LANDMARK;

   
    // echo $qurry ;
    // print_r($_SESSION); 
    // print_r($_SESSION);
    
    header('Location:Hawker_DashBoard.php');
      exit;

//     if(empty($_GET['status'])){
//       header('Location:index.php?status=1');
//       exit;
//  }

}


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hawker Register</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"/>
  </head>
  <body>      
    <div class="global-container">
        <div class="card login-form1">
            <div class="card-body">
                <h1 class="card-title text-center">Create Hawker Account</h1>
                <div class="card-text">
                        <form action="Hawker_register.php" method="post" >


                        <div class="form-group">
                           <label for="exampleInputEmail1">Enter Your Full Name</label>
                           <input type="text" name = "Hawk_name" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                       </div>

                            <div class="form-group" >
                              <label for="exampleInputEmail1">Mobile Number</label>
                              <input type="text" name = "Hawk_num" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                        </div>

               

                        <div class="form-group">
                            <label for="exampleInputPassword1"> Create Password</label>
                            <input type="password" name = "Hawk_pass" class="form-control rom-control-sm" id="exampleInputPassword1" aria-describedby="emailHelp">
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Landmark</label>
                            <input type="text" name = "Hawk_landmark" class="form-control rom-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                       </div>

                    <div class="form-group">
                           <label for="exampleInputEmail1">Pincode</label>
                           <input type="text" name = "Hawk_Pincode" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group ">
                    <label for="inputState">Type of Hawker</label>
                    <select id="inputState" class="form-control rom-control-sm" name="Hawk_type" >
                        <option selected>Type of Hawker</option>

                        <option value="VEGETABLE">Vegetable Hawker</option>
                        <option value="FRUIT">Fruit Hawker</option>
                        <option value="BAKER">Bakery Hawker</option>
                        <option value="OTHERS">Variety Hawkers</option>


                       
                       
                    </select>
                  </div>

                        <button type="submit" name="btn-register-Hawk" class="btn btn-primary btn-block">
                            Sign Up    
                        </button>

                        <div class="signup">
                         <a href="hlogin.html">   </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>