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
						<li style="margin-top: 0px;">
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
						<li class="show" style="margin-top: 0px;">
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
					<h2 class="title-head" style="border-color: #BF3C3C!important;">Sales<span></span></h2>
				</div>	 -->
				
				<?php include 'widget.php'; ?>
					<div class="col-lg-12 m-b30">
						<div class="widget-box">
							<div class="widget-inner">
								<div class="row">
									<div class="col-lg-6">
										<div class="heading-bx left">
											<h2 class="title-head" style="border-color: #BF3C3C!important;">Payroll <span>Details</span></h2>
										</div>
									</div>
									<div class="col-lg-6">
										<a href="" class="btn green radius-xl" style="background-color: #BF3C3C;float: right;"><i class="fa fa-print"></i><span>&nbsp; PRINT PAYSLIP RECORD</span></a>
									</div>
									<div class="col-lg-12">
										<center><h3>SALARY SLIP<BR><small>APRIL 2022</small> </h3></center>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-lg-6">
												<label class="col-form-label">Employee ID:</label>
											</div>
											<div class="col-lg-6">
												100001
											</div>
											<div class="col-lg-6">
												<label class="col-form-label">Name:</label>
											</div>
											<div class="col-lg-6">
												Cardo James Dalisay
											</div>
										</div>
									</div>
								
									<div class="col-lg-12"><br>
										<div class="table-responsive">
											<table class="table hover" style="width:100%">
												<thead style="background-color: #BF3C3C;">
													<tr>
														<th style="color: white;">Description</th>
														<th style="color: white;"></th>
														<th style="color: white;">Earnings</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Per day Salary</td>
														<td></td>
														<td>₱420.00</td>
													</tr>
													<tr>
														<td>Total Days of Entered</td>
														<td></td>
														<td>24</td>
													</tr>
													<tr>
														<td>Total Late</td>
														<td></td>
														<td>3</td>
													</tr>
												
												</tbody>
												<thead style="background-color: #BF3C3C;">
													<tr>
														<th style="color: white;">Total</th>
														<th style="color: white;"></th>
														<th style="color: white;">₱9125.00</th>
													</tr>
												</thead>
											</table>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-lg-6">
												<label class="col-form-label"></label>
											</div>
											<div class="col-lg-6">
											
											</div>
											<div class="col-lg-6">
												<label class="col-form-label"></label>
											</div>
											<div class="col-lg-6">
												
											</div>
											<div class="col-lg-6">
												<label class="col-form-label"></label>
											</div>
											<div class="col-lg-6">
												
											</div>
											<div class="col-lg-6">
												<label class="col-form-label"></label>
											</div>
											<div class="col-lg-6">
												
											</div>
									</div>
								</div>
								<div class="col-lg-6">
									<center><h4>NET PAY<br>₱9125.00</h4>
									</center>
									

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="ttr-overlay"></div>

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