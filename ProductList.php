<?php

$con = mysqli_connect("localhost" , "root" , "" , "final_project");



// header("Location: https://www.youtube.com ");
// exit;

if( isset($_POST['btn-Display-hawk-products']) )
{
    $CurrHawkID = $_POST['hawkIDToDisplay'] ;
    $querry = " select * from hawker_details where Hawkid = '$CurrHawkID' ";
    $sqli = mysqli_query( $con , $querry );
    $result = mysqli_fetch_array($sqli) ;

    $HawkName = $result['hawk_name'];
    $HawkNum = $result['hawk_number'];
    $HawkLandmark = $result['Hawk_Landmark'];
    $HawkPincode = $result['Hawk_Pincode'];
    // header("Location:https://www.youtube.com");
    // exit;

}

echo '  


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Hello, world!</title>
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
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" >Search</button>
        </form>
        <button class="navbar-toggler nav justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
        
        </div>
        <div class="navbar-right nav-item">
                <a href="profile.html">
                    <img src="image/profile.webp" alt="" class="rounded-circle" height="70">
                </a>
        </div>
      </nav>
      <div class="container mt-4 " id="cproduct">
        <div class="container">
        <h2 align="center" > '.$HawkName.' </h2> <br>
        <div align="center" >
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark my-2 my-sm-0 btn-lg" type="submit" name="SearchRequest" >Contact Info </button> <br><br>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"       aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-body">
                  <div class="popup center">
                    <div class="icon">
                      <i class="fa fa-check">
                        <img src="image/contact.png" alt="" height="70">
                      </i>
                    </div>
                    <div class="title">
                      Contact Me!!
                    </div>
                    <div class="discription">
                        Contact Number <br>
                        '.$HawkNum.'<br>
                        Landmark <br>
                        '.$HawkLandmark.'
                        <br>
                        '.$HawkPincode.'
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-dark my-2 my-sm-0 btn-lg">Close</button>
                </div>
    
              </div>
            </div>
          </div>
          </div>
      ';
      ?>



<h1 align="center" >Available Product List</h1>
        <br><br>
            <table class="table table-bordered" style="font-size: 20px;">
                <tr align="center" >
                    <th>
                        Name of the Product
                    </th>
                    <th>
                        Price of the Product
                    </th>
                </tr>
                <?php

      $CurrHawkID = $_POST['hawkIDToDisplay'] ;
      $querry = " select * from  products where Hawk_id = '$CurrHawkID' ";
      $sqli = mysqli_query( $con , $querry );

      while($result = mysqli_fetch_array($sqli) )
      {
        $ProName = $result['product_name'];
      $ProPrice = $result['PriceOfProduct'];

      echo ' 
      <tr align="center" >
      <td>
      '.$ProName.'
      </td>
      <td>
      '.$ProPrice.'
      </td>
  </tr>
      ';
      }
      ?>
      
  
 
            </table>


        </div>
      </div>
  </body>
</html>


