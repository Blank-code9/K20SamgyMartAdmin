<?php
require_once('../../connection/connection.php');

$conn = connection();
$update = "UPDATE `cart` SET `order_status`='1' WHERE order_no = '" . $_GET['id'] . "'";

if (mysqli_query($conn, $update)) {
    echo "<script>alert('Successfully Updated'); window.location='../kitchen.php'</script>";
} else {
    echo "<script>alert('problem Updating data'); window.location='../update-food-status.php'</script>";
}
mysqli_close($conn);
 