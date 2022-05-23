<?php
require_once('../../connection/connection.php');

$conn = connection();

if (isset($_POST['update'])) {

    $employeeid = $_POST['employeeid'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $salary = $_POST['salary'];
    $contact = $_POST['contact'];
    $emergcontactname = $_POST['emergcontactname'];
    $emegrcontact = $_POST['emergcontact'];
    $wholename = $fname . " " . $mname . " " . $lname;

    $sqli = "SELECT * FROM tblinformation";
    $details = $conn->query($sqli) or die($conn->error);
    $row = $details->fetch_assoc();
    $emid = $row['EmployeeID'];
    if (!empty($_FILES["uploadimage"]["name"])) {
        $fileName = basename($_FILES["uploadimage"]["name"]);
        $filetype = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($filetype, $allowTypes)) {
            $image = $_FILES['uploadimage']['tmp_name'];
            $imgcontent = addslashes(file_get_contents($image));
            $updaterfid = $conn->query("UPDATE `tblinformation` SET `image2` = '$imgcontent' WHERE `EmployeeID` = '$employeeid'");
            if ($updaterfid) {
                echo "<script>alert('Image Successfully Updated'); window.location='../employees.php'</script>";
            } else {
                echo "<script>alert('RFID Successfully Not Updated'); window.location='../employees.php'</script>";
            }
        } else {
        }
    } else {
        if ($employeeid == $emid) {
            // echo "<script>alert('SAME'); window.location='../employees.php'</script>";
        
            $updatedetails = $conn->query("UPDATE `tblinformation` SET `Firstname`='$fname', `Middlename`='$mname', `Lastname`='$lname', `ContactNumber`='$contact',`EmergencyContactName`='$emergcontactname',`EmergencyContactNumber`='$emegrcontact',`Salary`='$salary' WHERE `EmployeeID`='$employeeid'");
            if ($updatedetails ) {
                echo "<script>alert('Details Successfully Updated'); window.location='../employees.php'</script>";
            } else {
                echo "<script>alert('Details Not updated'); window.location='../employees.php'</script>";
            }
        } else {
            // echo "<script>alert('NOT SAME'); window.location='../employees.php'</script>";
            $updatestatus = $conn->query("UPDATE `tblstatus` SET `EmployeeID`='$employeeid' WHERE `Name` = '$wholename' ");
            $updaterfid = $conn->query("UPDATE `tblinformation` SET `EmployeeID`='$employeeid', `ContactNumber`='$contact',`EmergencyContactName`='$emergcontactname',`EmergencyContactNumber`='$emegrcontact',`Salary`='$salary' WHERE `Firstname`='$fname' AND `Middlename`='$mname'AND `Lastname`='$lname'");
            if ($updaterfid && $updatestatus) {
                echo "<script>alert('RFID Successfully Updated'); window.location='../employees.php'</script>";
            } else {
                echo "<script>alert('RFID Successfully Not Updated'); window.location='../employees.php'</script>";
            }
        }
    }
}
