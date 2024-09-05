<?php

session_start();
$con = mysqli_connect("localhost" , "root" , "" , "final_project");

if( isset($_POST['btn-backToProfile']) )
{
    header("Location: index.php") ;
}

// if( isset($_POST['btn-AddProduct'] ) )
// {

//   $curr_HawkId = 3 ;
//   $curr_Proname =  $_POST['Pro-Name'] ;
//   $curr_ProPrice =  $_POST['Pro-Price'] ;
// $QUERRY = " INSERT INTO products( `Hawk_id`, `product_name`, `PriceOfProduct`) 
//   VALUES ('$curr_HawkId',' $curr_Proname  ',' $curr_ProPrice ' ) " ;

//   mysqli_query( $con , $QUERRY );

//     header("Location: AddPro.php");
// }


// FEATCH CURRENT PRODUCT FROM ID 

if( isset($_POST['btn-EditProduct'] ) )
{
    $new_Name = $_POST['Pro-Name'] ;
    $new_Price = $_POST['Pro-Price'] ;
    // $curr_HawkId = $_SESSION['Hawk-ID'];
    
    $curr_Proid =  $_POST['Pro-ID'] ;

$QUERRY = "UPDATE products SET product_name='$new_Name' , PriceOfProduct='$new_Price ' WHERE temp_id  = '$curr_Proid' " ;

  mysqli_query( $con , $QUERRY );
  header("Location: Hawker_DashBoard.php");
  exit;
}

if( isset($_POST['Delete-Request'] ) )
{
    $curr_ID = $_POST['Temp-id'] ;

//    echo "<h1> HHHHHHHHHHHHHHHHUUUUUUUUUUUUUUUHHHHHHHHH </h1>";
   
$QUERRY = " DELETE FROM products WHERE temp_id = '$curr_ID' " ;
  mysqli_query( $con , $QUERRY );

  header("Location: Hawker_DashBoard.php");
  exit;
}


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body> 
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <div class="global-container">
       
        <div class="card login-form4">
            <div class="card-body">
                <h1 class="card-title text-center">Edit Product</h1>
                <div class="card-text">
                  <!-- enctype="multipart/form-data"  -->
                  <form method="post" action="EditProduct.php" >

                            <div class="form-group">
                              <label for="exampleInputEmail1">Product Name</label>
                              <input type="text" placeholder= "<?php echo $_POST['Temp-Name'] ;  ?>" class="form-control rom-control-sm" name="Pro-Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price of Product (per KG/ Dozen)</label>
                            <input type="text" placeholder= "<?php echo $_POST['Temp-Price'] ;  ?>" class="form-control rom-control-sm" name="Pro-Price" id="exampleInputPassword1" aria-describedby="emailHelp">
                        </div>

                        <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Photo of Product</label>
                            <div class="custom-file form-control">
                                <input type="file" class="custom-file-input form-control rom-control-sm "  aria-describedby="emailHelp">
                                <label class="custom-file-label form-control rom-control-sm " for="inputGroupFile02" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div> -->
                        

                        <!-- <div class="form-group">
                            <label for="exampleFormControlTextarea1">About Product </label>
                            <textarea class="form-control  rom-control-sm " name="Pro-note" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div> -->
                          <input type="hidden" name="Pro-ID" value="<?php echo $_POST['Temp-id'] ;  ?>">

                        <button type="submit" name="btn-EditProduct" class="btn btn-primary btn-block">
                            Confirm 
                        </button>
                        <button type="submit" name="btn-backToProfile" class="btn btn-primary btn-block">
                          Back to Profile 
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>


<?php



?>