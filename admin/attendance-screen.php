<?php
session_start();
include('../global/model.php');
include('department.php');
include('../connection/connection.php');
$conn = connection();



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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#search").keyup(function() {
				$.ajax({
					url: 'modal/screendetails.php',
					type: 'POST',
					data: {
						search: $(this).val()
					},
					success: function(result) {
						$("#result").html(result);
					}
				});

			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#search").keyup(function() {
				$.ajax({
					url: 'modal/screendetails_loadimage.php',
					type: 'POST',
					data: {
						search: $(this).val()
					},
					success: function(result) {
						$("#result2").html(result);
					}
				});

			});
		});
	</script>

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

<body class="" style="background-color: #F3F3F3;"><br><br>
	<main class="" style="background-color: #F3F3F3;">
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
									<h2 class="title-head" style="border-color: #BF3C3C!important;">Attendance <span></span></h2>
								</div>
							</div>
							<div class="col-lg-6">
							</div>

							<div class="col-lg-12">
								<div class="row">
									<div class="form-group col-4">
										<span id="result2"></span>
									</div>
									<div class="form-group col-8">
										<label class="col-form-label">Employee ID</label>
										<input class="form-control" id="search" name="employeeid" type="text" autofocus="autofocus" style="background-color: white;">
										<span id="result">
										</span>
										<label class="col-form-label">Current Date</label>
										<br>
										<?php
										echo " " . date("m-d-Y");
										?>
										<br>
										<label class="col-form-label">Current Time</label>
										<br>
										<div id="timer"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>
	<footer>
		<a href="pos-page2" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Primary link</a>

	</footer>
	<script src="../dashboard/assets/js/jquery.min.js"></script>
	<script src="../dashboard/assets/js/timer.js"></script>
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