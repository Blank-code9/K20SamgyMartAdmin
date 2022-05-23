<?php
    require_once('../../connection/connection.php');

    $conn = connection();
    
    if (isset($_POST['delete'])) {
        $prodid = $_POST['prodid'];
        $prodname = $_POST['prodname'];
        $prodprice = $_POST['prodprice'];
        $prodstock = $_POST['prodstock'];
        $prodsupp = $_POST['prodsup'];
        $supcontact = $_POST['supp'];
    
        $sqli1 = "DELETE FROM `tblinventory` WHERE ProductID = '$prodid'";
        $conn->query($sqli1) or die($conn->error);
        echo "<script>alert('Successfully Delete'); window.location='../inventory.php'</script>";
    }
?>