<?php
require_once('../../connection/connection.php');

$conn = connection();

if (isset($_POST['updatedata'])) {
    $foodid = $_POST['productid'];
    $name = $_POST['productname'];
    $price = $_POST['productprice'];

    $updatemenu = "UPDATE `menu` SET 
        product_name = '$name', 
        price = '$price' 
        WHERE product_id = '$foodid'";
    $conn->query($updatemenu) or die($conn->error);
    echo "<script>alert('Successfully Updated'); window.location='../menu.php'</script>";
  
}else{
    echo "<script>alert('problem'); window.location='../menu.php'</script>";
}
