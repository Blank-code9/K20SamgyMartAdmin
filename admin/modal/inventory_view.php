<?php
require_once('../../connection/connection.php');
$conn = connection();

$userid = $_POST['id'];
$sqli = 'SELECT * FROM tblinventory where ProductID = "' . $userid . '"';
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
?>
    <form action="function/inventory_updateproduct.php" method="POST">
        <div class="row">
            <div class="form-group col-12">
                <label class="col-form-label">Product ID</label>
                <input class="form-control" name="prodid" type="text" id="ProdID" value="<?php echo $row['ProductID']; ?>" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Product Name</label>
                <input class="form-control" name="prodname" id="ProdName" value="<?php echo $row['ProductName']; ?>" type="text" required style="background-color: white;">
            </div>
            <div class="form-group col-4">
                <label class="col-form-label">Price</label>
                <input class="form-control" name="prodprice" id="ProdPrice" value="<?php echo $row['ProductPrice']; ?>" type="text" required style="background-color: white;">
            </div>
            <div class="form-group col-4">
                <label class="col-form-label">Stocks</label>
                <input class="form-control" name="prodstock" type="number" id="ProdStocks" value="<?php echo $row['ProductStock']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-4">
                <label class="col-form-label">Product Discount (Percent)</label>
                <input class="form-control" name="itemdis" type="number" id="itemdis" value="<?php echo $row['ItemDiscount']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Supplier</label>
                <input class="form-control" name="prodsup" type="text" id="ProdSupplier" value="<?php echo $row['ProductSupplier']; ?>" required style="background-color: white;">
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Supplier Contact</label>
                <input class="form-control" name="supp" type="text" id="ProdContact" value="<?php echo $row['SupplierNumber']; ?>" required style="background-color: white;">
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn blue outline radius-xl" name="update" value="Update">
            <button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
        </div>
    </form>
<?php }


?>