<?php
session_start();
include('../global/model.php');
include('department.php');
include('../connection/connection.php');
$conn = connection();

if (isset($_POST['addmenu'])) {
	$productid = $_POST['productid'];
	$productname = $_POST['productname'];
	$productprice = $_POST['productprice'];
	$type = $_POST['type'];
	
	$sql = "INSERT INTO `menus`(`product_name`, `category`, `price`, `status`) VALUES ('$productname','$type','$productprice','1');";
	$conn->query($sql) or die($conn->error);
	echo "<script>alert('Successfully Added'); window.location='menu.php'</script>";
}

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
					<li style="margin-top: 0px;">
						<a href="payroll" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
							<span class="ttr-label">Payroll</span>
						</a>
					</li>
					<li class="show" style="margin-top: 0px;">
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
									<h2 class="title-head" style="border-color: #BF3C3C!important;">Menu <span></span></h2>
								</div>
							</div>
							<div class="col-lg-6">
								<a href="" data-toggle="modal" data-target="#add" class="btn green radius-xl" style="background-color: #BF3C3C;float: right;"><i class="fa fa-bars"></i><span>&nbsp; ADD MENU</span></a>

								<div id="add" class="modal fade" role="dialog">
									<form class="edit-profile m-b30" method="POST" enctype="multipart/form-data">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Add Menu</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="form-group col-12">
												
														</div>
														<div class="form-group col-12">
															<label class="col-form-label">Product Name</label>
															<input class="form-control" name="productname" type="text" value="" required style="background-color: white;">
														</div>
														<div class="form-group col-12">
															<label class="col-form-label">Price</label>
															<input class="form-control" name="productprice" type="text" value="" required style="background-color: white;">
														</div>
														<div class="form-group col-12">
															<label class="col-form-label">Product Menu Type: </label>
															<select name="type" id="color" required>
																<option value="">Choose Type</option>
																<option value="Unli">Unli</option>
																<option value="Silog Meals">Silog Meals</option>
																<option value="Korean Food">Bento Box</option>
																<option value="Drinks">Drinks</option>
																<option value="Others">Others</option>
															</select>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<input type="submit" name="addmenu" class="btn blue outline radius-xl" value="Add Menu">
													<button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

							<div class="col-lg-12"><br>
								<div class="table-responsive">
									<table id="table" class="table hover" style="width:100%">
										<thead>
											<tr>
												<th style="display:none;">Product ID</th>
												<th>Product Name</th>
												<th>Category</th>
												<th>Price</th>
												<th width="150">Action</th>
											</tr>
										</thead>
										<tbody>

											<?php
											$sql1 = "SELECT * FROM `menus`";
											$menu = mysqli_query($conn, $sql1);

											if (mysqli_num_rows($menu) > 0) {
												while ($row = mysqli_fetch_array($menu)) {
											?>
													<tr>
														<td><?php echo $row['product_id']; ?></td>
														<td><?php echo $row['product_name']; ?></td>
														<td><?php echo $row['category']; ?></td>
														<td>Php <?php echo number_format($row['price'], 2); ?></td>


														<td>
															<center>
																<a href="" data-toggle="modal" data-target="#view" class="btn blue view_data" data-id="<?php echo $row['product_id']; ?>" style="width: 50px; height: 37px;" data-toggle="tooltip" title="Edit Details"><i class="ti-marker-alt" style="font-size: 12px;"></i></a>&nbsp;
																<a href="" data-toggle="modal" data-target="#delete" class="btn red view_datadelete" data-id="<?php echo $row['product_id']; ?>" style="width: 50px; height: 37px;" data-toggle="tooltip" title="Delete"><i class="ti-trash" style="font-size: 12px;"></i></a>
															</center>
														</td>
													</tr>
											<?php
												}
											}

											?>

										</tbody>
									</table>
								</div>
							</div>
							<!-- Edit Records -->
							<div id="viewdetails" class="modal fade" role="dialog">
								<form class="edit-profile m-b30" method="POST" enctype="multipart/form-data">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Edit Record</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body" id="viewdata">
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- Delete Records -->
							<div id="viewdetailsdelete" class="modal fade" role="dialog">
								<form class="edit-profile m-b30" method="POST" enctype="multipart/form-data">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Delete Record</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body" id="viewdatadelete">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- 								<center><a href="menu-details" class="btn green radius-xl" style="background-color: #BF3C3C;"><i class="fa fa-shopping-cart"></i><span>&nbsp; PROCESS ORDER</span></a></center> -->
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

		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
	<!-- Transfer Value to modal (Edit or Update) -->
	<script type='text/javascript'>
		$(document).ready(function() {
			$('.view_data').click(function() {
				var id = $(this).data('id');
				$.ajax({
					url: "modal/menu_view.php",
					method: "post",
					data: {
						id: id
					},
					success: function(response) {
						$('#viewdata').html(response);
						$('#viewdetails').modal("show");
					}
				});
			});
		});
	</script>
	<!-- Transfer Value to modal (Delete) -->
	<script type='text/javascript'>
		$(document).ready(function() {
			$('.view_datadelete').click(function() {
				var id = $(this).data('id');
				$.ajax({
					url: "modal/menu_delete.php",
					method: "post",
					data: {
						id: id
					},
					success: function(response) {
						$('#viewdatadelete').html(response);
						$('#viewdetailsdelete').modal("show");
					}
				});
			});
		});
	</script>
</body>

</html>