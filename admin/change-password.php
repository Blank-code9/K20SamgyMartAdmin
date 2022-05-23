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

					<?php include 'widget.php'; ?>

				<div class="row">
					<div class="col-lg-12 m-b30">
						<div class="widget-box">
							<div class="widget-inner">
								<div class="heading-bx left">
									<h2 class="title-head" style="border-color: #BF3C3C!important;">Update <span>Profile</span></h2>
								</div>
								<form class="edit-profile" method="POST">
									<div class="">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Email Address</label>
											<div class="col-sm-7">
											
												<input class="form-control" type="email" value="samgyandmart@gmail.com" name="email" readonly >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Current Password</label>
											<div class="col-sm-7">
												<input class="form-control" type="password" name="cpass" minlength="5" maxlength="20" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">New Password</label>
											<div class="col-sm-7">
												<input class="form-control" type="password" name="npass" minlength="5" maxlength="20" id="password">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Re Type Password</label>
											<div class="col-sm-7">
												<input class="form-control" type="password" name="rpass" minlength="5" maxlength="20" id="confirm_password">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Security Question</label>
											<div class="col-sm-7">
												<span>Memorable place no one knows?</span><div style="height: 5px;"></div>
												<input class="form-control" type="text" name="security">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-2">
										</div>
										<div class="col-sm-7">
											<label class="col-sm-2 col-form-label" id="message"></label><br>
											<button name="save_pass" type="submit" class="btn blue radius-xl" style="background-color: #BF3C3C; color: white;"><i class="ti-lock"></i> Save changes</button>
											<a href="index" class="btn-secondry radius-xl"><i class="ti-arrow-left"></i> Cancel</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
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
		<script type="text/javascript">
			var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

			function validatePassword() {
				if(password.value != confirm_password.value) {
					confirm_password.setCustomValidity("Passwords Don't Match");
				} 

				else {
					confirm_password.setCustomValidity('');
				}
			}

			password.onchange = validatePassword;
			confirm_password.onkeyup = validatePassword;
		</script>
	</body>

</html>

<?php
	if(isset($_POST['save_pass'])){
		
		// password 12345
		$currentpass = $_POST['cpass'];
		$newpass = $_POST['npass'];
		$newpass2 = $_POST['rpass'];
		$sql = "SELECT * FROM admin";
		$admin = $conn->query($sql) or die ($conn->error);
		$row = $admin->fetch_assoc();
		$result = $row['pword'];
		$security = $_POST['security'];
		if(empty($security)){
			if(password_verify($currentpass, $result)){
				$updatepass = password_hash($newpass, PASSWORD_DEFAULT);
				$sql = "UPDATE admin SET pword = '$updatepass'";
				$conn->query($sql) or die ($conn->error);
				echo"<script>alert('Password Successfully changed'); window.location='index.php'</script>";
			}else{
				echo"<script>alert('Incorrect Old Password'); window.location='change-password.php'</script>";
			}
		}elseif(!empty($security) && !empty($newpass)){
			if(password_verify($currentpass, $result)){
				$updatepass = password_hash($newpass, PASSWORD_DEFAULT);
				$sql = "UPDATE admin SET pword = '$updatepass', security_question = '$security'";
				$conn->query($sql) or die ($conn->error);
				echo"<script>alert('Security Question Answer and Password successfully updated'); window.location='index.php'</script>";
			}else{
				echo"<script>alert('Incorrect Old Password'); window.location='change-password.php'</script>";
			}
		}elseif(empty($newpass)){
			if(password_verify($currentpass, $result)){
				
				$sql = "UPDATE admin SET security_question = '$security'";
				$conn->query($sql) or die ($conn->error);
				echo"<script>alert('Security Question answer successfully changed'); window.location='index.php'</script>";
			}else{
				echo"<script>alert('Incorrect Old Password'); window.location='change-password.php'</script>";
			}
		}else{

		}
	}

?>