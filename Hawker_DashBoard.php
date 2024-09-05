<?php
// error_reporting(0);
session_start();

$con = mysqli_connect("localhost" , "root" , "" , "final_project");
$currID =  $_SESSION['Hawk-ID'] ;

$querry = " SELECT * FROM `products` WHERE Hawk_id = '$currID' ";

$sql = mysqli_query( $con , $querry );

// $result =  mysqli_fetch_array( $sql );


?>




<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Welcome!</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="image/logo.png" alt="logo" height="70">
        </a>
        <button class="navbar-toggler nav justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="AddPro.php"><button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="SearchRequest" ><b>+ Add Products</b></button></a>
              </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse " id="navbarNav">
        
        </div>
        <div class="navbar-right nav-item">
                <a href="Hawker_Profile.php">
                    <img src="image/profile.webp" alt="" class="rounded-circle" height="70">
                </a>
        </div>
      </nav>
      
      <div class="container mt-4 " id="cproduct">
            <H2 align="center" >Current Products</H2>
            <br><br>
            <table class="table table-bordered">
                <tr>
              
                    <th>  
                        About Product
                    </th>
                    <th >
                 
                        Edit /Remove Product
                    </th>
                </tr>
                <?php
                while($result =  mysqli_fetch_array( $sql ))
                {
                  $badProgrammer = $result['temp_id'];
                  $badProgrammer2 = $result['product_name'];
                  $badProgrammer3 = $result['PriceOfProduct'];

                  echo "<form action='EditProduct.php' method='post' > ";
                  echo "<tr>";
                  echo "<td>";
                  echo "<input type='hidden' name='Temp-id' , value='$badProgrammer'>";
                  echo "<input type='hidden' name='Temp-Name' , value='$badProgrammer2'>";
                  echo "<input type='hidden' name='Temp-Price' , value='$badProgrammer3'>";
                  echo $result['product_name'];
                  echo "<br>";
                  echo "Price (kg , dozen)" ;
                  echo "<br>";
                  echo $result['PriceOfProduct']  ;
                  echo "</td>";
                  echo ' <td align= "center">
                        <br><br>
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="Edit-Request" >Edit Product</button><br><br>
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="Delete-Request">Delete Product</button>
                    </td> ';
                  
                  echo "</tr>";
                  echo "</form>";
                }

                ?>