<?php

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

		.numpad {
			aspect-ratio: 1/1;
		}

		.numpad-2 {
			aspect-ratio: 52/20;
		}
	</style>
	<body class="ttr-opened-sidebar ttr-pinned-sidebar" style="background-color: white;">
			<div class="container-fluid">
				<div class="col-lg-12 m-b30">
					<br>

								<div class="row">
									<div class="col-lg-6">
										<div class="heading-bx left">
											<h2 class="title-head" style="border-color: #BF3C3C!important;">K20 Samgy and Mart <span>POS</span></h2>
										</div>
									</div>
									<div class="col-lg-12"></div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-lg-12">
												<label class="col-form-label">ENTRY:</label>
											</div>
											<div class="col-lg-12" style="margin-top: 10px;">
												<input class="form-control" type="text" required>
												<span id="entry"></span>
											</div>
											<div class="col-3"></div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">
													1
												</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">2</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">3</button>
											</div>
											<div class="col-2" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad-2">◀--------</button>
											</div>
											<div class="col-4"></div>
											<div class="col-3"></div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">4</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">5</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">6</button>
											</div>
											<div class="col-2" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad-2">ENTER</button>
											</div>
											<div class="col-4"></div>
											<div class="col-3"></div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">7</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">8</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">9</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">0</button>
											</div>
											<div class="col-1" style="margin-top: 10px;">
												<button type="button" class="btn btn-block numpad">*</button>
											</div>
											<div class="col-4"></div>
											<br>
											<br>
											<br>
											<div class="col-4">
												<center><label class="col-form-label">DATA ENTRY<br>OPTION</label></center>
											</div>
											<div class="col-4">
												<center><label class="col-form-label">REPORTS<br>CASH FLOW</label></center>
											</div>
											<div class="col-4">
												<center><label class="col-form-label">VOID/CANCEL/SUSPEND<br>DISCOUNT/CHARGE</label></center>
											</div>
											<div class="col-4">
												<button type="button" class="btn btn-block" style="height: 100%;">DISCOUNT(S)</button>
											</div>
											<div class="col-3">
												<button type="button" class="btn btn-block">REMOVE<br>DISCOUNT(S)</button>
											</div>
											<div class="col-4">
												<button type="button" class="btn btn-block" style="height: 100%;">SURCHARGE</button>
											</div>
										
										</div>
									</div>
									<div class="col-lg-6">
										<div class="row">
											<div class="col-lg-12">
												<div class="col-lg-12"><br>
													<div class="table-responsive">
														<table class="table hover" style="width:100%">
															<thead>
																<tr>
																	<th>Product id</th>
																	<th>Product Name</th>
																	<th>Product Price</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1019</td>
																	<td>ACCES PERFUME</td>
																	<td>8906008724035</td>
																</tr>
																<tr>
																	<td>1019</td>
																	<td>ACCES PERFUME</td>
																	<td>100.00</td>
																</tr>
																<tr>
																	<td>1019</td>
																	<td>ACCES PERFUME</td>
																	<td>100.00</td>
																</tr>
																<tr>
																	<td>1019</td>
																	<td>ACCES PERFUME</td>
																	<td>100.00</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="col-lg-12" style="margin-top: 10px;">
													<label class="col-form-label">GROSS:</label><span style="float: right;">0.00</span>
												</div>
												<div class="col-lg-12" style="margin-top: 10px;">
													<input class="form-control" type="text" required>
												</div>
												<div class="col-lg-12" style="margin-top: 10px;">
													<label class="col-form-label">SUB<br>TOTAL:</label><span style="float: right; font-size: 30px;">300.00</span>
												</div>
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
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>

</html>