<?php

// use function PHPSTORM_META\type;

include('../../connection/connection.php');
$output = "";
$conn = connection();
if (isset($_POST['submit'])) {
    $sql1 = "SELECT * FROM `tblinventory`";
    $inventory = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($inventory) > 0) {
        $output .= '
            <table class="table" bordered="1">
                 <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Supplier</th>
                    <th>Supplier Contact</th>
                    <th>Stocks</th>
                </tr>
         
            ';

        while ($row = mysqli_fetch_array($inventory)) {

            $output .= '
         
            <tr>
                <td>' . $row['ProductID'] . '</td>
                <td>' . $row['ProductName'] . '</td>
                <td>' . $row['ProductPrice'] . ' </td>
                <td>' . $row['ProductSupplier'] . '</td>
                <td>' . $row['SupplierNumber'] . '</td>
                <td>' . $row['ProductStock'] . '</td>
            </tr>
       
            ';
            $output .= '</table>';
            header("Content-type: application/xls");
            header("Content-Disposition:attachment; filename=inventory-report.xls");
            echo $output;
        }
    } else {
        echo 'No data found';
    }
}
