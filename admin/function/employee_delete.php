<?php
    require_once('../../connection/connection.php');

    $conn = connection();
    
    if (isset($_POST['delete'])) {
        $EmployeeID = $_POST['employeeid'];
        
    
        $sqli1 = "DELETE FROM `tblinformation` WHERE EmployeeID = '$EmployeeID'";
        $sqli12 = "DELETE FROM `tblstatus` WHERE EmployeeID = '$EmployeeID'";
        $conn->query($sqli1) or die($conn->error);
        echo "<script>alert('Successfully Delete'); window.location='../employees.php'</script>";
    }
?>