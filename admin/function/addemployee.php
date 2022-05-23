<?php

require_once('../../connection/connection.php');

$conn = connection();
//Add new Employee
if (isset($_POST['addemployee'])) {
    //image destination
    // $file = '../../assets/images/employeeimage/' . basename($_FILES['uploadimage']['name']);

    //details
    $id = $_POST['employeeid'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $emergname = $_POST['emergcontactname'];
    $emergcontact = $_POST['emergcontact'];
    $salary = $_POST['salary'];

    $sql1 = "SELECT * FROM `tblinformation`";
    $inventory = $conn->query($sql1) or die($conn->error);
    $row = $inventory->fetch_assoc();
    $empid = $row['EmployeeID'];

    if ($empid == $id) {
        echo "<script>alert('RFID already registered'); window.location='../add-employee.php'</script>";
    } else {
        $fileName = basename($_FILES["uploadimage"]["name"]);
        $filetype = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($filetype, $allowTypes)) {
            $image = $_FILES['uploadimage']['tmp_name'];
            $imgcontent = addslashes(file_get_contents($image));
            $insert = $conn->query("INSERT INTO `tblinformation`(`EmployeeID`, `Firstname`, `Middlename`, `Lastname`, `ContactNumber`, `EmergencyContactName`, `EmergencyContactNumber`, `Salary`, `image2`) VALUES ('$id','$fname','$mname','$lname','$contact','$emergname', '$emergcontact', '$salary', '$imgcontent')");
            if($insert){
                echo "<script>alert('Uploaded Successfully'); window.location='../employees.php'</script>";
            }else{
                echo "<script>alert('Recored not uploaded'); window.location='../employees.php'</script>";
            }   
        }
        
    }
}
?>




<!-- $sql = "INSERT INTO `tblinformation`(`EmployeeID`, `Firstname`, `Middlename`, `Lastname`, `ContactNumber`, `EmergencyContactName`, `EmergencyContactNumber`, `Salary`, `image`) VALUES ('$id','$fname','$mname','$lname','$contact','$emergname', '$emergcontact', '$salary', '$image')"; -->