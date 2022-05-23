<?php
require_once('../../connection/connection.php');

$conn = connection();
$update = "UPDATE `menus` SET `status`='1' WHERE  product_id = '" . $_GET['id'] . "'";

if (mysqli_query($conn, $update)) {
    echo "<script>alert('Successfully Updated'); window.location='../kitchen.php'</script>";
} else {
    echo "<script>alert('problem Updating data'); window.location='../update-food-status.php'</script>";
}
mysqli_close($conn);
 