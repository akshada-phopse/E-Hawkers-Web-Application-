<?php
// DISPLAY CATAGORY ==> DONE
// DISPLAY Hawker by product ==> DONE
// DISPLAY HAWKER Product list ==>

error_reporting(0);

session_start();
$con = mysqli_connect("localhost" , "root" , "" , "final_project");




?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Available Hawkers</title>
  </head>
  <body>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <a href="Customer_DashBoard.php">
          <img src="image/logo.png" alt="logo" height="70">
          </a>
        </a>
        <form class="form-inline" action="Display_Products.php" method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="Key_To_Search" aria-label="Search" style="width: 500px;">
          <button class="btn btn-outline-dark my-2 my-sm-0" name="SearchRequest" type="submit" >Search</button>
        </form>
        <button class="navbar-toggler nav justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
        
        </div>
        <div class="navbar-right nav-item">
                <a href="Customer_Profile.php">
                    <img src="image/profile.webp" alt="" class="rounded-circle" height="70">
                </a>
        </div>
      </nav>
      <div class="container mt-4 " id="cproduct">
        <div class="container">
        <H1 align="center" >Available Hawkers</H1>
        <br><br>
        <table class="table table-bordered table-active ">



<?php



if( isset($_POST['SearchRequest']) )
{
$key =  strtoupper( $_POST['Key_To_Search'] );
$catagory = array("VEGETABLE", "FRUIT", "BAKER");
$isCatagory = FALSE;
if (in_array( $key ,$catagory)  )
{
    $isCatagory=TRUE;
}
$curr_pincode = 4242;

if(  $isCatagory )
{ 
    $querry = " select * from hawker_details where 
    Hawk_Pincode = '$curr_pincode' && Type_of_product = '$key'  " ;
    $sqli = mysqli_query( $con , $querry );
    $row_count = mysqli_affected_rows($con);
    if($row_count > 0 )
    {
        IHATEPHP($sqli);
        // while(   $result = mysqli_fetch_array($sql)  ) {

        //     echo "<br>";
        //     echo  $result['hawk_name'];
        //     echo "<br>";
        //     echo  $result['hawk_number'];
        //     echo "<br>";
        // }
}
else{
    echo "NO RESULTS FOUND";
}
}
// echo Hawkid
else{
$querry =  " select * from hawker_details where 
    '$curr_pincode' = Hawk_Pincode &&  Hawkid IN
    (select Hawk_id from products  where product_name = '$key' )" ;
    $sqli = mysqli_query( $con , $querry );
    $row_count = mysqli_affected_rows($con);
    if($row_count > 0 )
    {
        IHATEPHP($sqli);
        // while(   $result = mysqli_fetch_array($sql)  ) {
        //     echo "<br>";
        //     echo  $result['hawk_name'];
        //     echo "<br>";
        //     echo  $result['hawk_number'];
        //     echo "<br>";
        // }
}
else{
    echo "NO RESULTS FOUND";
}
}
}
    
function getProducts($type)
{
    $curr_pincode = $_SESSION['pincode'] ;

    $con = mysqli_connect("localhost" , "root" , "" , "final_project");

     $querry = " select * from hawker_details where 
    Hawk_Pincode = '$curr_pincode' && Type_of_product = '$type'  " ;

    $sqli = mysqli_query( $con , $querry );

    $row_count = mysqli_affected_rows($con);

    if($row_count > 0 )
    {
        IHATEPHP($sqli);
        // while(   $result = mysqli_fetch_array($sql)  ) {
        //     echo "<br>";
        //     echo  $result['hawk_name'];
        //     echo "<br>";
        //     echo  $result['hawk_number'];
        //     echo "<br>";
        // }
}
else{
    echo "NO RESULTS FOUND";
}
}

if( isset($_POST['show_fruits']) )
{
    getProducts("FRUIT");
   
}

if( isset($_POST['show_vegetables']) )
{
    getProducts("VEGETABLE");
}

if( isset($_POST['show_bakery']) )
{
    getProducts("BAKER");
}

if( isset($_POST['show_others']) )
{
    getProducts("OTHERS");
}


?>




       

<?php 

function IHATEPHP($SQL)
{

    while($result = mysqli_fetch_array($SQL) ) 
    { 

    $badprogrammer  = $result['hawk_name'];
    $badprogrammer2  = $result['hawk_number'];
    $badprogrammer3  = $result['Hawk_Landmark'];
    $badprogrammer4 = $result['Hawkid'];
    
    echo '
    <tr>
        <td align="center">
          <br><br><br>
            <h2 > '. $badprogrammer . ' </h2>
    
        </td>
        <td align="center">
            <br>
            <form action="ProductList.php" method="post">

            <button type="submit" data-toggle="modal" data-target="#exampleModal" 
            class="btn btn-outline-dark my-2 my-sm-0 btn-lg" type="submit" name="btn-Display-hawk-products" >Product List </button>
            <input type="hidden" name="hawkIDToDisplay" value= "'.$badprogrammer4.'" >
            
             </form>
            <br><br><br>
        
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
                          '.$badprogrammer2.'  <br>
                          Landmark <br>
                          '.$badprogrammer3.' 
                      </div>
                      <br>
                      <button type="submit" class="btn btn-outline-dark my-2 my-sm-0 btn-lg">Close</button>
                  </div>
      
                </div>
              </div>
            </div>
            </div>
        <div>
            <button type="button" data-toggle="modal" data-target="#exampleModal" 
            class="btn btn-outline-dark my-2 my-sm-0 btn-lg" type="submit" name="SearchRequest" >Contact Info </button>
        </div>
        </td>
    </tr>
    
    ' ; 
    }

}
         ?>
         </table>
        <!-- <table class="table table-bordered table-active ">
            <tr>
                <td align="center">
                  <br><br><br>
                    <h2 > Valleri Dsouza </h2>

                </td>
                <td align="center">
                    <br>
                    <a href="productlist.html"> <button class="btn btn-outline-dark my-2 my-sm-0 btn-lg"
                     type="submit" name="SearchRequest" >View Products</button></a>
                    <br><br><br>
                
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
                                  7387613442 <br>
                                  Landmark <br>
                                  Lorem ipsum dolor sit amet.
                              </div>
                              <br>
                              <button type="submit" class="btn btn-outline-dark my-2 my-sm-0 btn-lg">Close</button>
                          </div>
              
                        </div>
                      </div>
                    </div>
                    </div>
                <div>
                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-dark my-2 my-sm-0 btn-lg" type="submit" name="SearchRequest" >Contact Info </button>
                </div>
                </td>
            </tr>
        </table> -->


            
  </body>
</html>