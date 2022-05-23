<?php


require_once('../../connection/connection.php');
$conn = connection();
date_default_timezone_set('Asia/Manila');
$time = date('h:i A');
$date = date("m/d/Y");
if (isset($_POST['search'])) {
    $search = $_POST['search'];

    if (strlen($search) >= 10) {
        $sql = 'SELECT * FROM tblinformation where EmployeeID = "' . $search . '"';
        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0) {

            // $sqltimeout = "UPDATE `tblstatus` SET`TimeOut`='$time' WHERE EmployeeID ='$search' AND Date ='$date'";
            // $conn->query($sqltimeout) or die($conn->error);
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['EmployeeID'];
                $fname = $row['Firstname'];
                $mname = $row['Middlename'];
                $lname = $row['Lastname'];
                $wholename = $fname . " " . $mname . " " . $lname;

?>
                <form method="POST" id="details">
                    <label class="col-form-label">Employee Name</label>
                    <input class="form-control" name="aapprove-email" value="<?php echo $wholename ?>" required style="background-color: white;">
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="col-form-label">Time In</label>
                            <input class="form-control" name="aapprove-email" value="<?php echo $time ?>" required style="background-color: white;">
                        </div>
                        <div class="form-group col-6">
                            <label class="col-form-label">Time Out</label>
                            <input class="form-control" name="aapprove-email" value="" required style="background-color: white;">
                        </div>
                    </div>
                    <!-- <input class="form-control" name="employeename" type="text" value="<?php echo $wholename ?>" readonly style="background-color: white;"> -->

                    <label class="col-form-label"></label>
                </form>

<?php }

            $checkstatus = "SELECT * FROM `tblstatus` WHERE `EmployeeID` ='$search' AND `Date` ='$date' AND `status` ='0'";
            $statusresult = mysqli_query($conn, $checkstatus);

            if ($statusresult->num_rows > 0) {
                $update = "UPDATE `tblstatus` SET `TimeOut`='$time',`Status`='1' WHERE EmployeeID = '$search' AND Date ='$date'";
                $result = mysqli_query($conn, $update);
            } else {
                $sqli = "INSERT INTO tblstatus (EmployeeID, Date, TimeIn, Name)
                SELECT * FROM (SELECT '$search', '$date', '$time', '$wholename') AS tmp
                WHERE NOT EXISTS (
                    SELECT Date,EmployeeID FROM tblstatus WHERE Date = '$date' && EmployeeID = '$search'
                ) LIMIT 1";
                $conn->query($sqli) or die($conn->error);
            }
        } else {
            echo '<h1> No data found </h1>';
        }
    } else {
    }
} else {
}

?>
<!-- /* Reloading the page every 5 seconds. */ -->
<script type="text/javascript">
  setTimeout(function(){
    location.reload();
  },3000)
</script>