<?php


function get_Lastitems(){
try {        
include("config.php");
$singel_col = $get_conn->query("SELECT product_name, sku , img FROM product ORDER BY sku ASC LIMIT 4 ");	
$recent=$singel_col->fetchAll(PDO::FETCH_ASSOC);  

} catch ( Exception $e) {
 echo $e->getMessage();
exit;
}
   

return $recent;

}

// this function is return  single item ;
function get_single_item($sku){
    
    try {
include("config.php");
      // error we did founded some of  the tshirts ain't available for sizes 
    $fetch_item=$get_conn->prepare(" SELECT * FROM product WHERE sku = ? "); //excute one query on database get the item linked to the id
    $fetch_item->bindParam(1,$sku); // passing one single id avoid SQL injections
    $fetch_item->execute();

} 
catch (Exception $e) {
    echo $e->getMessage();  
      
}
  $product=$fetch_item->fetch(PDO::FETCH_ASSOC);    
  $product['sizes'] = array();
   
  try {
    include("config.php");
    $fetch_item=$get_conn->prepare("SELECT size FROM sizes INNER JOIN product_size ON product_size.size_id=sizes.id WHERE product_sku=?");
    $fetch_item->bindParam(1,$sku); // passing one single id avoid SQL injections
    $fetch_item->execute();
   }catch (Exception $e) {
      echo $e->getMessage();
   }

   while ($row=$fetch_item->fetch(PDO::FETCH_ASSOC)) {
     $product['sizes'][] = $row['size'];
    }
  return $product;
}







?>