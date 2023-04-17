<?php

//first include connection.php
include("../main-functions.php");

if( isset($_GET['id'])){
$item_id=intval( $_GET['id']); //   it does make the id is integer
$product= get_single_item($item_id); // store in function

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../../../css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>

 <div class="row">


  <div class='col-sm-6 '> 
 <?php echo  "<img class='img-thumbnail' width='350px' height='400px' src=../../../../".$product['img']." style='margin-top:110px'> ";?>
  </div>

<div class='col-sm-6 py-5 my-5 mt-5' >
<select class="form-control  my-5 mt-5 " style="" >
<?php  foreach($product['sizes'] as $size ){ ?> <option> <?php echo $size; ?> </option> <?php }?>
</select>
</div>
</div>
</body>
</html>