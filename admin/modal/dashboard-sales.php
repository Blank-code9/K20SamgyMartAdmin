<?php 
    include('../../connection/connection.php');
    $conn = connection();

?>
<div class="heading-bx left">

    <?php

    $date = date("Y-m-d");
    $datemonday = date("Y-m-d", strtotime("monday this week"));
    $datenextmonday = date("Y-m-d", strtotime("monday next week"));
    $month = date("m", strtotime($date));

    // Total Sales
    $totalsales = "SELECT SUM(total) AS TotalSales FROM sales";
    $querytotal = mysqli_query($conn, $totalsales);
    while ($rowtotal = mysqli_fetch_assoc($querytotal)) {
        $salestotal = $rowtotal['TotalSales'];
    }

    // Daily Sales
    $currentdate = "SELECT SUM(total) AS TotalCurrent FROM sales WHERE date = '$date'";
    $querycurrent = mysqli_query($conn, $currentdate);
    while ($rowcurrent = mysqli_fetch_assoc($querycurrent)) {
        $currentsales = $rowcurrent['TotalCurrent'];
    }

    // Weekly Sales
    $weekly = "SELECT SUM(total) AS TotalWeekly FROM sales WHERE date between '$datemonday'AND '$datenextmonday'";
    $queryweekly = mysqli_query($conn, $weekly);
    while ($rowweekly = mysqli_fetch_assoc($queryweekly)) {
        $weeklysales = $rowweekly['TotalWeekly'];
    }
    //Monthly Sales
    $monthly = "SELECT SUM(total) as TotalMonthly FROM sales WHERE EXTRACT(MONTH FROM date) ='$month' ";
    $querymonthly = mysqli_query($conn, $monthly);
    while ($rowmonthly = mysqli_fetch_assoc($querymonthly)) {
        $monthlysales = $rowmonthly['TotalMonthly'];
    }


    ?>
    <h2 class="title-head" style="border-color: #BF3C3C!important;">Sales <span>Summary</span></h2>
</div>
<div>
    <center>
        <h2 class="title-head" style="border-color: #BF3C3C!important;">Total Sales: <span>Php <?php echo number_format($salestotal, 2) ?></span></h2>
    </center>
</div>

<div class="table-responsive">
    <table class="table hover" style="width:100%">
        <tr>
            <td>This Day</td>
            <td class="text-center">Php <?php echo number_format($currentsales, 2) ?></td>
        </tr>
        <tr>
            <td>This Week</td>
            <td class="text-center">Php <?php echo number_format($weeklysales, 2) ?></td>
        </tr>
        <tr>
            <td>This Month</td>
            <td class="text-center">Php <?php echo number_format($monthlysales, 2) ?></td>
        </tr>
    </table>
</div>