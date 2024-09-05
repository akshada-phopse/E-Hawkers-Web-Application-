<?php

session_start();

if( isset($_POST['btn-edit'] ) )
{
    header('Location:EditCustProfile.php');
    exit;
}


if( isset( $_POST["btn-logout"] ) )
{
  session_unset();
  session_destroy();
  header('Location:index.php');
  exit;

}
$con = mysqli_connect("localhost" , "root" , "" , "final_project");



$currName = $_SESSION['name']  ; 
$currNum = $_SESSION['number'] ; 
$currMail = $_SESSION['mail'];
$currPass =  $_SESSION['pass'] ;
$currPin =  $_SESSION['pincode'] ; 
$currAdd = $_SESSION['address'];



?>





<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php



?>
    <div class="global-container ">
        <div class="card login-form2" >

        <table align="center" >
<tr align="center">
    <th ><img class="rounded-circle border border-dark" src="image/profile.webp" alt="Generic placeholder image" width="140" height="140"><br></th>
    <br><br>
 </tr>
 <tr align="center">
    <td><h1>  <?php 
    echo $currName ;
      ?>   </h1></td>
 </tr>
 <tr align="center">
    <td>
       <b> 
       <?php 
    echo $currNum ;
      ?> 
    </b><br><br>
    </td>
 </tr>
 <tr align="center">
    <td>
       <b>    <?php 
    echo $currMail ;
      ?>  </b><br><br>
    </td>
 </tr>
 <tr align="center">
    <td>
       <b>

       <?php 
    echo $currPass ;
      ?> 
        </b>
        <br><br>
    </td>
 </tr>
 <tr align="center">
    <td>
       <b>

       <?php 
    echo $currAdd ;
      ?> 
        </b>
        <br><br>
    </td>
 </tr>
 <tr align="center">
    <td>
       <b>    <?php 
    echo $currPin ;
      ?>  </b><br><br>
    </td>
 </tr>

 <tr align="center">
    <td>
       <b>    <?php 
    echo $_SESSION['id'] ;
      ?>  </b><br><br>
    </td>
 </tr>
 <form method="post" action="Customer_Profile.php">

 <tr align="center">
    <td >
        <input value ="edit" class="btn btn-outline-dark my-2 my-sm-0" name="btn-edit" type="submit" ><b></b> <br><br>
    </td>
 </tr>
 <tr align="center">
    <td >
        <input name="btn-logout" value ="LOGOUT" class="btn btn-outline-dark my-2 my-sm-0" type="submit" ><b></b> <br><br>
    </td>
 </tr>
</form>
</table>

</div>
</div>

</div>

  </body>

  </html>


<?php




?>




<!-- $Temp_ADDD =  $_SESSION["address"] ; -->



    
 




