<?php
    require_once('../../connection/connection.php');

    $conn = connection();
    $delete = "DELETE FROM `menus` WHERE product_id = '". $_GET['id'] ."'";

    if(mysqli_query($conn,$delete)){
        echo "<script>alert('Successfully Delete'); window.location='../menu.php'</script>";
    }else{
        echo "<script>alert('problem deleting data'); window.location='../menu.php'</script>";
    }
    mysqli_close($conn);
