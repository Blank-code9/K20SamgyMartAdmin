<?php
require_once('../../connection/connection.php');
$conn = connection();
if (isset($_POST['updatedata'])) {
    $foodid = $_POST['productid'];
    $name = $_POST['productname'];
    $price = $_POST['productprice'];

    $updatemenu = "UPDATE `menu` SET 
        product_name = '$name', 
        price = '$price' 
        WHERE product_id = '$foodid'";
    $conn->query($updatemenu) or die($conn->error);
    echo "<script>alert('Successfully Updated'); window.location='../menu.php'</script>";
}


$foodname = ['productname'];
$price = ['productprice'];
$foodid = $_POST['id'];
$menuupdate = 'SELECT * FROM menus where product_id = "' . $foodid . '"';
$result = mysqli_query($conn, $menuupdate);
while ($row = mysqli_fetch_array($result)) {
?>
    <form method="POST" action="../function/menu_update.php">
        <div class="row">
            <div class="form-group col-12">
                <label class="col-form-label">Product ID</label>
                <input class="form-control" name="productid" type="text" value="<?php echo $row['product_id'] ?>" style="background-color: white;" readonly>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Product Name</label>
                <input class="form-control" name="productname" type="text" value="<?php echo $row['product_name'] ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Price</label>
                <input class="form-control" name="productprice" type="text" value="<?php echo $row['price'] ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Product Menu Type: </label>
                <input class="form-control" name="productprice" type="text" value="<?php echo $row['category'] ?>" style="background-color: white;" readonly>
            </div>
        </div>
        <div class="modal-footer">.
            <input type="submit" class="btn blue outline radius-xl" name="updatedata" value="Update">
            <button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
        </div>
    </form>
<?php
}