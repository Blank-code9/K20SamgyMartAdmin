<?php
require_once('../../connection/connection.php');
$conn = connection();


$employeeid = $_POST['id'];
$info = 'SELECT * FROM tblinformation where EmployeeID = "' . $employeeid . '"';
$infosql = mysqli_query($conn, $info);
$details = mysqli_fetch_array($infosql);
$fname = $details['Firstname'];
$mname = $details['Middlename'];
$lname = $details['Lastname'];
$wholename = $fname . ' ' . $mname . ' ' . $lname;
$sqli = 'SELECT * FROM tblstatus where EmployeeID = "' . $employeeid . '"';
$result = mysqli_query($conn, $sqli);

?>
<div class="row">
    <div class="form-group col-6">
        <label class="col-form-label">Employee ID</label>
        <input class="form-control" type="text" value="<?php echo $employeeid ?>" readonly style="background-color: white;">
    </div>
    <div class="form-group col-6">
        <label class="col-form-label">Name</label>
        <input class="form-control" name="aapprove-email" type="text" value="<?php echo $wholename ?>" readonly style="background-color: white;">
    </div>
    <div class="form-group col-12">
        <form method="POST">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-4">
                    <?php
                    if (isset($_POST['datesearch'])) {
                        $dateselect = $_POST["datesearch"];
                        echo $dateselect;
                    }
                    ?>
                    <input class="form-control" name="datesearch" type="date" style="background-color: white;">

                </div>
                <div class="col-lg-2">
                    <button type="submit" name="search" class="btn yellow btn-block radius-xl" style="background-color: #BF3C3C;">
                        <i class="ti-search"></i>
                    </button>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </form>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <center><b>Date</b></center>
            </div>
            <div class="col-lg-4">
                <center><b>Time In</b></center>
            </div>
            <div class="col-lg-4">
                <center><b>Time Out</b></center>
            </div>

            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-lg-4">
                    <center>
                        <?php echo $row['Date']; ?>
                    </center>
                </div>
                <div class="col-lg-4">
                    <center>
                        <?php echo $row['TimeIn']; ?>
                    </center>
                </div>
                <div class="col-lg-4">
                    <center>
                        <?php echo $row['TimeOut']; ?>
                    </center>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
</div>