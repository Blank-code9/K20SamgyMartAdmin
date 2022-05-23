<?php
session_start();
include('../global/model.php');
include('department.php');
include('../connection/connection.php');
$conn  = connection();


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<meta name="description" content="" />

	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<link rel="icon" href="../assets/images/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../assets/images/icon.png" />

	<title>Restaurant and Payroll Management System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="../dashboard/assets/vendors/calendar/fullcalendar.css">

	<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/typography.css">

	<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/shortcodes/shortcodes.css">

	<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="../dashboard/assets/css/color/color-1.css">
</head>
<style type="text/css">
	.btn.dropdown-toggle.btn-default:hover {
		color: #000 !important;
	}

	.btn.dropdown-toggle.btn-default:focus {
		color: #000 !important;
	}

	tbody tr:hover {
		background-color: #d4d4d4;
	}

	.widget-card .icon {
		position: absolute;
		top: auto;
		bottom: -20px;
		right: 5px;
		z-index: 0;
		font-size: 65px;
		color: rgba(0, 0, 0, 0.15);
	}

	.ttr-sidebar-navi ul li.show>a {
		background-color: #BF3C3C !important;
	}

	.ttr-material-button:hover {
		background-color: #BF3C3C !important;
	}

	.ttr-label,
	.ttr-icon>i {
		color: white;
	}

	.widget-card .icon {
		position: absolute;
		top: auto;
		bottom: -20px;
		right: 5px;
		z-index: 0;
		font-size: 65px;
		color: rgba(0, 0, 0, 0.15);
	}

	tbody tr:hover {
		background-color: #d4d4d4;
	}

	.borderless td,
	.borderless th {
		border: none;
	}
</style>

<body class="ttr-opened-sidebar ttr-pinned-sidebar" style="background-color: #F3F3F3;">

	<?php include 'navbar.php'; ?>

	<div class="ttr-sidebar" style="background-color: #5b90da;">
		<div class="ttr-sidebar-wrapper content-scroll">

			<?php include 'sidebar.php'; ?>

			<nav class="ttr-sidebar-navi">
				<ul>
					<li style="padding-left: 20px; padding-top: 5px; padding-bottom: 5px; margin-top: 0px; margin-bottom: 0px;">
						<span class="ttr-label" style="color: #D5D6D8; font-weight: 500;">Menu</span>
					</li>
					<li class="show" style="margin-top: 0px;">
						<a href="index" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-home" aria-hidden="true"></i></span>
							<span class="ttr-label">Dashboard</span>
						</a>
					</li>
					<li style="margin-top: 0px;">
						<a href="sales" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
							<span class="ttr-label">Sales</span>
						</a>
					</li>
					<li style="margin-top: 0px;">
						<a href="inventory" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
							<span class="ttr-label">Inventory</span>
						</a>
					</li>
					<li style="margin-top: 0px;">
						<a href="attendance" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
							<span class="ttr-label">Attendance</span>
						</a>
					</li>
					<li style="margin-top: 0px;">
						<a href="employees" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<span class="ttr-label">Employee Details</span>
						</a>
					</li>
					<li style="margin-top: 0px;">
						<a href="payroll" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
							<span class="ttr-label">Payroll</span>
						</a>
					</li>
					<li style="margin-top: 0px;">
						<a href="menu" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
							<span class="ttr-label">Menu</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<main class="ttr-wrapper" style="background-color: #F3F3F3;">
		<div class="container-fluid">
			<!-- <div class="heading-bx left">
					<h2 class="title-head" style="border-color: #BF3C3C!important;">Dashboard<span></span></h2>
				</div>	 -->

			<?php include 'widget.php'; ?>

			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<style type="text/css">
				.chart {
					width: 100%;
					min-height: 500px;
				}

				.rowy {
					margin: 0 !important;
				}
			</style>
			<div class="row">
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="widget-inner" id="sales">

							<!-- <hr>
								<center><a href="" class="btn green radius-xl" style="background-color: #BF3C3C;"><i class="fa fa-bar-chart"></i><span>&nbsp;VIEW REPORTS HISTORY</span></a></center> -->
						</div>
					</div>
				</div>
				<!-- Attendance Viewing -->
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="widget-inner">
							<div class="row">
								<div class="col-lg-12">
									<div class="heading-bx left">
										<h2 class="title-head" style="border-color: #BF3C3C!important;">Attendance<span> Update</span></h2>
									</div>
									<div class="table-responsive" id="attendance">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Attendance Viewing -->
				<!-- Recent Transaction Viewing -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="widget-inner">
							<div class="row">
								<div class="col-lg-12">
									<div class="heading-bx left">
										<h2 class="title-head" style="border-color: #BF3C3C!important;">Recent <span>Transactions</span></h2>
									</div>
									<div class="table-responsive">
										<table id="table" class="table hover" style="width:100%">
											<thead>
												<tr>
													<th>TransactionID</th>
													<th>Date</th>
													<th>Type of Transaction</th>
													<th width="80">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$sql1 = "SELECT DISTINCT order_no, date_added, TransactionType FROM `cart` ORDER BY 'date_added' DESC";
												$result = mysqli_query($conn, $sql1);

												if (mysqli_num_rows($result) > 0) {
													while ($row = mysqli_fetch_array($result)) {
														$date = new DateTime ($row['date_added']);
														$sepdate = $date->format('n/j/Y');

												?>
														<tr>
															<td><?php echo $row['order_no'] ?></td>
															<td><?php echo $sepdate?></td>
															<td><?php echo $row['TransactionType'] ?></td>
															<td>
																<center><a href="" data-toggle="modal" data-target="#view" class="btn blue" style="width: 50px; height: 37px;" data-toggle="tooltip" title="View Details"><i class="ti-search" style="font-size: 12px;"></i></a></center>
															</td>
														</tr>
												<?php
													}
												} else {
												}

												?>
												<div id="view" class="modal fade" role="dialog">
													<form class="edit-profile m-b30" method="POST" enctype="multipart/form-data">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Sales Details</h4>
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																</div>
																<div class="modal-body">
																	<div class="row">
																		<div class="form-group col-12">
																			<label class="col-form-label">Transaction ID</label>
																			<input class="form-control" type="text" value="100002" readonly style="background-color: white;">
																		</div>
																		<div class="form-group col-12">
																			<label class="col-form-label">Product Summary</label>
																			<div class="d-flex" style=" box-sizing: border-box;">
																				<div class="form-group col-6">
																					<label class="col-form-label">Item</label>
																				</div>
																				<div class="ml-auto form-group col-6">
																					<label class="col-form-label">Price</label>
																				</div>
																			</div>
																		</div>
																		<div class="ml-auto form-group col-6">
																			<label class="col-form-label">Total: </label>
																		</div>
																		<div class="form-group col-12">
																			<label class="col-form-label">Transaction Type: </label>
																			<input class="form-control" type="text" value="Restaurant" readonly style="background-color: white;">
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
													</form>
												</div>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Recent transaction viewing -->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<script src="../dashboard/assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {

			var gender = new Chart(
				$('#gender'), {
					type: 'pie',
					data: {
						labels: [
							'Product 1',
							'Product 2',
							'Product 3'
						],
						datasets: [{
							label: 'Gender',
							data: [parseInt(21), parseInt(34), parseInt(34)],
							backgroundColor: [
								'rgb(54, 162, 235)',
								'rgb(255, 99, 132)',
								'rgb(91, 218, 112)'

							]
						}]
					},
				}
			);
		});
	</script>
	<script src="../dashboard/assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="../dashboard/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="../dashboard/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="../dashboard/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="../dashboard/assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="../dashboard/assets/vendors/counter/waypoints-min.js"></script>
	<script src="../dashboard/assets/vendors/counter/counterup.min.js"></script>
	<script src="../dashboard/assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="../dashboard/assets/vendors/masonry/masonry.js"></script>
	<script src="../dashboard/assets/vendors/masonry/filter.js"></script>
	<script src="../dashboard/assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src='../dashboard/assets/vendors/scroll/scrollbar.min.js'></script>
	<script src="../dashboard/assets/js/functions.js"></script>
	<script src="../dashboard/assets/vendors/chart/chart.min.js"></script>
	<script src="../dashboard/assets/js/admin.js"></script>
	<script src='../dashboard/assets/vendors/calendar/moment.min.js'></script>
	<script src="../dashboard/assets/js/jquery.dataTables.min.js"></script>
	<script src="../dashboard/assets/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		});

		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>

</html>

<script>
	function loadXMLDocAttendance() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("attendance").innerHTML =
					this.responseText;
			}
		};
		xhttp.open("GET", "modal/dashboard-attendance.php", true);
		xhttp.send();
	}
	setInterval(function() {
		loadXMLDocAttendance();

	}, 1000);

	window.onload = loadXMLDocAttendance;
</script>
<script>
	function loadXMLDocSales() {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("sales").innerHTML =
					this.responseText;
			}
		};
		xhttp.open("GET", "modal/dashboard-sales.php", true);
		xhttp.send();
	}
	setInterval(function() {
		loadXMLDocSales();

	}, 1000);

	window.onload = loadXMLDocSales;
</script>