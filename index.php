<?php

define("TITLE_PAGE"," Smart Shop Cart ");
require_once("_/app/php/main-functions.php");
$recents  = get_Lastitems();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo TITLE_PAGE  ?> </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="_/css/bootstrap/bootstrap.min.css" rel="stylesheet"type="text/css">

  <link href="_/css/icon/bootstrap-icons.css" rel="stylesheet"type="text/css">
  <!-- Material Design Bootstrap -->
  <link href="_/css/bootstrap/mdb.min.css" rel="stylesheet"type="text/css">
  <!-- Your custom styles (optional) -->
</head>


<body>




<div class="container">
 <div class="row">

 <?php
 try {

   foreach( array_reverse( $recents ) as $product ){
     echo  '<div class="col-sm-4 col-md-6  col-md-4 col-lg-3">'
     .
    '<div class="card mb-5  text-dark my-4 ">'
      .'<div class="card-body text-center">'
      .'<img class="card-img img-fluid  rounded" width="150" height="150" src="'.$product['img'].'">'
      .'<h6 class="card-title pt-1 text-ceter">'.$product['product_name'].'</h6>'.
      '<i class="card-subtitle bi bi-star-fill text-warning"></i>'.
      '<i class="card-subtitle bi bi-star-fill text-warning"></i>'.
      '<i class="card-subtitle bi bi-star-fill text-warning"></i>'.
      '<i class="card-subtitle bi bi-star-half text-warning"></i><br>'.
      '<span class="float-left card-text">15$</span><br> <span class="float-right text-muted" style="text-decoration:line-through;">25$</span> '.
      '<a href="http://localhost/www/Shop/_/app/php/tshirts/tshirts.php?id='.$product['sku'].'" class="card-link btn btn-sm btn-info mt-5 d-flex justify-content-center" style="border-radius:7px">View Details</a>'.
      '</div>'
    .'</div>'
     .'</div>';
    }

  } catch (Exception $e) {

   echo $e->getMessage();
  }
  ?>


 </div>

  </div>

<script type="text/javascript" src="_/js/js/jquery.min.js" rel="javascript"></script>
<script src="_/js/script/script.js" rel="javascript"> </script>
<!-- JQuery -->
<!-- Bootstrap tooltips -->
  <script type="text/javascript" src="_/js/js/bootstrap.min.js"rel="javascript"></script>
  <script type="text/javascript" src="_/js/js/popper.min.js"rel="javascript"></script>
  <!-- Bootstrap core JavaScript -->
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="_/js/js/mdb.min.css" rel="javascript"></script>



</body>
</html>
