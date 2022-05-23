<?php
require_once('../../connection/connection.php');
date_default_timezone_set('Asia/Manila');

?>

<table class="table hover" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Time In</th>
            <th>Time Out</th>
        </tr>
    </thead>
    <?php
    $conn = connection();
    $date = date("m/d/Y");
    $status = mysqli_query($conn, 'SELECT * FROM tblstatus WHERE Date = "' . $date . '"');
    while ($row = mysqli_fetch_array($status)) {
        $id = $row['EmployeeID'];
        $name = $row['Name'];
        $timein = $row['TimeIn'];
        $timeout = $row['TimeOut'];

    ?>
        <tbody>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><span class="badge badge-success"><?php echo $timein ?></span></td>
                <td><span class="badge badge-success"><?php echo $timeout ?></span></td>
            </tr>
        </tbody>
    <?php } ?>
</table>