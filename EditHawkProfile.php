<?php



session_start();
$con = mysqli_connect("localhost" , "root" , "" , "final_project");

if ( isset($_POST['btn-update']) )
{
    $Name = $_POST['newName']; // NAME
   $Pin = $_POST['pin']; 
   $Landmark = $_POST['Landmark'];
   $Phone = $_POST['Phone'];
   $Pass = $_POST['Pass'];
   $type = $_POST['Hawk_type'];

   $curr_ID =  $_SESSION['Hawk-ID'] ;


    mysqli_query($con ,  " UPDATE  hawker_details SET hawk_name='$Name', password ='$Pass',hawk_number='$Phone', Hawk_Pincode='$Pin',Hawk_Landmark= '$Landmark',Type_of_product= '$type'  WHERE Hawkid = '$curr_ID'" );

    

    header('Location:Hawker_Profile.php');
    exit;

}

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Registration</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"> </head>
  <body>  
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
    <div class="global-container">
        <div class="card login-form2">
            <div class="card-body">
                <h1 class="card-title text-center">Edit Your Details</h1>
                <div class="card-text">
                        <form action="EditHawkProfile.php" method="post">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Enter Your Name</label>
                              <input type="text" name="newName" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                        </div>
                         
                       
                        <!-- <div class="form-group">
                           <label for="exampleInputEmail1">Enter Your Address </label>
                           <input type="text" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                       </div>
                    <div class="form-group">
                           <label for="exampleInputEmail1">City</label>
                           <input type="text" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pincode</label>
                        <input type="text" name="pin" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Landmark</label>
                    <input type="text" name="Landmark" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mobile No</label>
                <input type="text" name="Phone" class="form-control rom-control-sm" id="exampleInputNumber1" aria-describedby="emailHelp">
          </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> New Password</label>
                    <input type="password" name="Pass" class="form-control rom-control-sm" id="exampleInputPassword1" aria-describedby="emailHelp">
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
                        <button type="submit" name="btn-update" class="btn btn-primary btn-block">
                                        Update  
                        </button>

                        <div class="signup">
                         <a href="#">Cancle</a>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>