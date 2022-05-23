<?php
include("../../connection/connection.php");
$conn = connection();

?>

<div class="container-fluid"><br>
    <div class="row">
        <div class="col-lg-12 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-3">
                            <span style="font-size: 30px;"><b>Main Kitchen</b></span>
                        </div>
                        <div class="col-lg-9" align="right">
                            <a href="update-food-status" class="btn green radius-xl" style="background-color: #2ECC71;">Update Food Status</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #1</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <?php
                            $orderupdate = "SELECT order_no FROM orders WHERE table_no = '1'";
                            $ordersqli = mysqli_query($conn, $orderupdate);
                            while ($roworder = mysqli_fetch_assoc($ordersqli)) {
                                $orderno1 = $roworder['order_no'];
                            }
                            $getstatus = "SELECT order_status FROM cart WHERE order_no = '$orderno1' ";
                            $getstatussqli = mysqli_query($conn, $getstatus);
                            while ($rowstatus = mysqli_fetch_assoc($getstatussqli)) {
                                $orderstatus = $rowstatus['order_status'];
                            }

                            ?>
                            <div align="right">
                                <?php echo $orderno1 ?>
                                <a href="../function/kitchen-ready.php?id=<?php echo $roworder['order_no']; ?>" class="btn btn-block" <?php if ($orderstatus = '0') { ?> style="display:none;" <?php   } ?>data-toggle="tooltip" title="Ready">Ready</a>
                                <a href="../function/kitchen-update.php?id=<?php echo $roworder['order_no'];  ?>" class="btn btn-block" <?php if ($orderstatus = '0') { ?> style="display:none;" <?php   } ?>data-toggle="tooltip" title="Accept Order">Accept Order</a>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '1'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #2</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '2'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #3</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '3'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #4</b></span><br>

                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '4'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #5</b></span><br>

                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '5'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #6</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '6'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #7</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '7'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #8</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '8'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #9</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '9'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
        <div class="col-lg-4 m-b30">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <span style="font-size: 26px;"><b>Table #9</b></span><br>
                        </div>
                        <div class="col-lg-4">
                            <div align="right">
                                <button type="button" class="btn btn-block">Ready</button>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table1 = "SELECT order_no FROM orders WHERE table_no = '10'";
                                $table1result = mysqli_query($conn, $table1);
                                while ($row = mysqli_fetch_array($table1result)) {
                                    $orderno1 = $row['order_no'];
                                }

                                $get = "SELECT * FROM cart WHERE order_no = '$orderno1' AND order_status !='2'";
                                $result = mysqli_query($conn, $get);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $prod_id = $row['product_id'];
                                        $get = "SELECT * FROM menus WHERE product_id = '$prod_id'";
                                        $result2 = mysqli_query($conn, $get);
                                        $row2 = mysqli_fetch_array($result2);
                                ?>
                                        <tr>
                                            <td><?php echo $row2['product_name'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td>
                                                <?php
                                                if ($row['order_status'] == '0') {
                                                ?>
                                                    Pending
                                                <?php
                                                } else {
                                                ?>
                                                    Processing
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                            </tbody>
                    <?php
                                    }
                                } else {
                                }
                    ?>
                        </table>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>