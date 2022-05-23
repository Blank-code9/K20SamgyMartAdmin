<?php
	session_start();
	include('../global/model.php');
	include('department.php');
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
			color: #000!important;
		}

		.btn.dropdown-toggle.btn-default:focus {
			color: #000!important;
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

		.ttr-sidebar-navi ul li.show > a {
			background-color: #BF3C3C!important;
		}

		.ttr-material-button:hover {
			background-color: #BF3C3C!important;
		}

		.ttr-label, .ttr-icon > i {
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
		.borderless td, .borderless th {
		    border: none;
		}

		.btn {
			background-color: #5b90da;
			color: white;
		}

		.btn:hover {
			background-color: #BF3C3C;
		}
	</style>
	<body class="ttr-opened-sidebar ttr-pinned-sidebar" style="background-color: #F3F3F3;">
			<div class="container-fluid">
				<div class="col-lg-12 m-b30">
					<br>
						<div class="widget-box">
							<div class="widget-inner">
								<div class="row">
									<div class="col-lg-6">
										<div class="heading-bx left">
											<h2 class="title-head" style="border-color: #BF3C3C!important;">Menu <span>Details</span></h2>
										</div>
									</div>
									<div class="col-lg-12"></div>
									<div class="col-lg-4">
										<div class="row" style="border: 1px solid black; padding-top: 10px; margin-left: 0px;">
											<div class="col-lg-6">
												<label class="col-form-label">Invoice No. :</label>
											</div>
											<div class="col-lg-6" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
											<div class="col-lg-6">
												<label class="col-form-label">Invoice Date:</label>
											</div>
											<div class="col-lg-6" style="margin-bottom: 10px;">
												<input class="form-control" type="date" required>
											</div>
											
										</div>
										<div class="row">
											<div class="col-lg-12">
												<label class="col-form-label">Barcode:</label>
											</div>
											<div class="col-lg-7" style="margin-top: 10px;">
												<input class="form-control" type="text" required>
											</div>
										</div>
									</div>
									<div class="col-lg-2" style="margin-top: 10px;">
										<button type="button" class="btn btn-block">Cash</button>
										<button type="button" class="btn btn-block">Credit Card</button>
										<button type="button" class="btn btn-block">Debit Card</button>
										<button type="button" class="btn btn-block">Wallet</button>
										<button type="button" class="btn btn-block">Credit Customer</button>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-lg-6">
												<label class="col-form-label">No. of Items :</label>
											</div>
											<div class="col-lg-6" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
											<div class="col-lg-6">
												<label class="col-form-label">No. of Qty. :</label>
											</div>
											<div class="col-lg-6" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
											<div class="col-lg-3">
												<label class="col-form-label">Discount :</label>
											</div>
											<div class="col-lg-3" style="margin-bottom: 10px;">
												<select class="form-control">
													<option>%</option>
												</select>
											</div>
											<div class="col-lg-3" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
											<div class="col-lg-1" style="margin-bottom: 10px;">
												<label class="col-form-label">%</label>
											</div>
											<div class="col-lg-2" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
											<div class="col-lg-6">
												<label class="col-form-label">Grand Total :</label>
											</div>
											<div class="col-lg-6" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
											<div class="col-lg-6">
												<label class="col-form-label">Amount Tendered :</label>
											</div>
											<div class="col-lg-6" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
											<div class="col-lg-6">
												<label class="col-form-label">Change :</label>
											</div>
											<div class="col-lg-6" style="margin-bottom: 10px;">
												<input class="form-control" type="text" required>
											</div>
										</div>
									</div>
									<div class="col-lg-12"><br>
										<div class="table-responsive">
											<table class="table hover" style="width:100%">
												<thead style="background-color: #BF3C3C;">
													<tr>
														<th style="color: white;">Product Code</th>
														<th style="color: white;">Product Name</th>
														<th style="color: white;">Barcode</th>
														<th style="color: white;">Quantity</th>
														<th style="color: white;">Total Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1019</td>
														<td>ACCES </td>
														<td>8906008724035</td>
														<td>1</td>
														<td>16.8</td>
													</tr>
													<tr>
														<td>1019</td>
														<td>ACCES </td>
														<td>8906008724035</td>
														<td>1</td>
														<td>16.8</td>
													</tr>
													<tr>
														<td>1019</td>
														<td>ACCES </td>
														<td>8906008724035</td>
														<td>1</td>
														<td>16.8</td>
													</tr>
													<tr>
														<td>1019</td>
														<td>ACCES </td>
														<td>8906008724035</td>
														<td>1</td>
														<td>16.8</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="button" class="btn" style="width: 14%;">New Trans<br>[F1]</button>
										<button type="button" class="btn" style="width: 14%;">Save + Print<br>[F2]</button>
										<button type="button" class="btn" style="width: 14%;">Get Cash<br>[F3]</button>
										<button type="button" class="btn" style="width: 14%;">Lock Trans<br>[F4]</button>
										<button type="button" class="btn" style="width: 14%;">Close Tally<br>[F5]</button>
										<button type="button" class="btn" style="width: 14%;">Scan Items<br>[F6]</button>
										<button type="button" class="btn" style="width: 13%;">Delete Row<br>[F7]</button>
									</div>
									<div class="col-lg-12" style="margin-top: 10px;">
										<button type="button" class="btn" style="width: 14%;">Bill Discount<br>[F8]</button>
										<button type="button" class="btn" style="width: 14%;">Change Qty.<br>[F9]</button>
										<button type="button" class="btn" style="width: 14%;">Find Item<br>[F10]</button>
										<button type="button" class="btn" style="width: 14%;">Change Rate<br>[F11]</button>
										<button type="button" class="btn" style="width: 14%;">Hold Trans<br>[F12]</button>
										<button type="button" class="btn" style="width: 14%;">Load Trans<br>[Ctrl+F1]</button>
										<button type="button" class="btn" style="width: 13%;">Bill Reprint<br>[Ctrl+F2]</button>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<script src="../dashboard/assets/js/jquery.min.js"></script>
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

			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>

</html>