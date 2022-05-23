<?php

require_once('../../connection/connection.php');

$conn = connection();
if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $sql = 'SELECT * FROM tblinformation where EmployeeID = "' . $search . '"';
    $result = mysqli_query($conn, $sql);
   
} else {
}

?>
<div>
<?php  while ($row = $result->fetch_assoc()) {?>
    <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['image2']); ?>" height="100"/>
   <?php } ?>

</div>