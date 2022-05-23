<?php
require_once('../../connection/connection.php');
$conn = connection();

$userid2 = $_POST['id'];
$sqli2 = 'SELECT * FROM tblinventory where ProductID = "' . $userid2 . '"';
$result2 = mysqli_query($conn, $sqli2);
while ($row = mysqli_fetch_array($result2)) {
?>
    <form action="function/inventory_deleteproduct.php" method="POST">
        <div class="row">
            <div class="form-group col-12">
                <label class="col-form-label">Product ID</label>
                <input class="form-control" name="prodid" type="text" id="ProdID" value="<?php echo $row['ProductID']; ?>" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Product Name</label>
                <input class="form-control" name="prodname" id="ProdName" value="<?php echo $row['ProductName']; ?>" type="text" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Price</label>
                <input class="form-control" name="prodprice" id="ProdPrice" value="<?php echo $row['ProductPrice']; ?>" type="text" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-6">
                <label class="col-form-label">Stocks</label>
                <input class="form-control" name="prodstock" type="number" id="ProdStocks" value="<?php echo $row['ProductStock']; ?>" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Supplier</label>
                <input class="form-control" name="prodsup" type="text" id="ProdSupplier" value="<?php echo $row['ProductSupplier']; ?>" required style="background-color: white;" readonly>
            </div>
            <div class="form-group col-12">
                <label class="col-form-label">Supplier Contact</label>
                <input class="form-control" name="supp" type="text" id="ProdContact" value="<?php echo $row['SupplierNumber']; ?>" required style="background-color: white;" readonly>
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn blue outline radius-xl" name="delete" value="Delete">
            <button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
        </div>
    </form>
<?php } ?>