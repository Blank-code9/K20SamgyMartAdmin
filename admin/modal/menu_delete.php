<?php
require_once('../../connection/connection.php');
$conn = connection();


$foodid = $_POST['id'];
$menuupdate = 'SELECT * FROM menus where product_id = "' . $foodid . '"';
$result = mysqli_query($conn, $menuupdate);
while ($row = mysqli_fetch_array($result)) {
?>
    <form method="POST" action="function/menu_viewdelete.php">
        <div class="row">
            <div class="form-group col-12">
                <label class="col-form-label">Product ID</label>
                <input class="form-control" name="productid" type="text" value="<?php echo $row['product_id'] ?>" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Product Name</label>
                <input class="form-control" name="productname" type="text" value="<?php echo $row['product_name'] ?>" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Price</label>
                <input class="form-control" name="productprice" type="text" value="<?php echo $row['price'] ?>" required style="background-color: white;" readonly>
            </div>
        </div>
        <div class="modal-footer">
            <a href="function/menu_viewdelete.php?id=<?php echo $row['product_id']; ?>" class="btn blue outline radius-xl">Delete</a>
            
            <button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
        </div>
    </form>
<?php }
