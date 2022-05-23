<?php

require_once('../../connection/connection.php');
$conn = connection();

$employeeid = $_POST['id'];
$sqli = 'SELECT * FROM tblinformation where EmployeeID = "' . $employeeid . '"';
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    // image path ../../asset/images/employeeimage;
?>
    <form action="function/employee_updatedetails.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-3">

                <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['image2']); ?>" height="100" />

                <label class="col-form-label">Upload Photo</label>
                <input class="form-control" name="uploadimage" type="file" style="background-color: white;">
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Employee ID</label>
                <input class="form-control" name="employeeid" type="text" value="<?php echo $row['EmployeeID']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-4">
                <label class="col-form-label">First Name</label>
                <input class="form-control" name="fname" type="text" value="<?php echo $row['Firstname']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-4">
                <label class="col-form-label">Middle Name</label>
                <input class="form-control" name="mname" type="text" value="<?php echo $row['Middlename']; ?>" style="background-color: white;">
            </div>
            <div class="form-group col-4">
                <label class="col-form-label">Last Name</label>
                <input class="form-control" name="lname" type="text" value="<?php echo $row['Lastname']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Salary</label>
                <input class="form-control" name="salary" type="number" value="<?php echo $row['Salary']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Contact</label>
                <input class="form-control" name="contact" type="text" value="<?php echo $row['ContactNumber']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Emergency Contact Name</label>
                <input class="form-control" name="emergcontactname" type="text" value="<?php echo $row['EmergencyContactName']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Emergency Contact</label>
                <input class="form-control" name="emergcontact" type="text" value="<?php echo $row['EmergencyContactNumber']; ?>" required style="background-color: white;">
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn blue outline radius-xl" name="update" value="Save Changes">
            <button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
        </div>
    </form>
<?php }


?>