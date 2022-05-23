<?php

session_start();
include('global/model.php');
include('send_email.php');

$conn = connection();
if (isset($_SESSION['sess'])) {
	echo "<script>window.open('admin/index.php','_self');</script>";
}


// Email Verification here
$generator = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$verificationcode = substr(str_shuffle($generator),0,8);


if (isset($_POST['sendemail'])) {
	$update = "UPDATE `admin` SET `code`='$verificationcode' WHERE  `id` = '1'";
	$conn->query($update) or die($conn->error);
	sendemail();
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

	<meta property="og:image" content="assets/images/cover.png" />
	<meta name="format-detection" content="telephone=no">

	<link rel="icon" href="assets/images/icon.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png" />

	<title>Restaurant and Payroll Management System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	<style type="text/css">
		.red-hover {
			background-color: #BF3C3C !important;
			color: white !important;
		}

		.red-hover:hover {
			background-color: #5b90da !important;
			color: white !important;
		}

		.account-heads {
			position: sticky;
			left: 0;
			top: 0;
			z-index: 1;
			width: 500px;
			min-width: 500px;
			height: 100vh;
			background-position: center;
			text-align: center;
			align-items: center;
			display: flex;
			vertical-align: middle;
		}

		.account-heads a {
			display: block;
			width: 100%;
		}

		.account-heads:after {
			opacity: 0.9;
			content: "";
			position: absolute;
			left: 0;
			top: 0;
			z-index: -1;
			width: 100%;
			height: 100%;
			background: transparent;
		}

		@media only screen and (max-width: 1200px) {
			.account-heads {
				width: 350px;
				min-width: 350px;
			}

		}

		@media only screen and (max-width: 991px) {
			.account-heads {
				width: 100%;
				min-width: 100%;
				height: 200px;
			}
		}
	</style>
</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<div class="account-form">
			<div class="account-heads" style="background-image:url(assets/images/bg2.png);"></div>
			<div class="account-form-inner">
				<div class="account-container">
					<div class="heading-bx left">
						<h2 class="title-head" style="border-color: #BF3C3C!important;">Forgot <span>Password</span></h2>
					</div>
					<form class="contact-bx" method="POST">
						<div class="row placeani">
							<div class="col-lg-6">
								<div class="form-group">
									<center>
										<h4><a href="forgot-password1" class="btn btn-primary btn-lg" >ANSWER SECURITY QUESTION</a></h4>
									</center>
								</div>
							</div>

							<div class="col-lg-6">

								<div class="form-group">
									<form method="POST">
										<center>
											<button type="submit" name="sendemail"  class="btn btn-primary btn-lg" >Send Email </button>
											<!-- <h4><a href="" name="sendemail" style="color: #8d0e2b;" type="submit"><br>USE EMAIL ADDRESS</a></h4> -->
										</center>
									</form>
								</div>
							</div>

						</div>
						<hr>

					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var timer = setInterval(function() {
				var timer_text = $('#timer').text();
				const timer_split = timer_text.split(':');
				var seconds = (timer_split[0] * 60) + timer_split[1];

				if (parseInt(seconds) > 0) {
					$('#timer').load(location.href + " #timer");
				} else {
					$('#timer').html('');
				}

				$('#submit-button').load(location.href + " #submit-button");
			}, 1000);
		});
	</script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendors/counter/waypoints-min.js"></script>
	<script src="assets/vendors/counter/counterup.min.js"></script>
	<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="assets/vendors/masonry/masonry.js"></script>
	<script src="assets/vendors/masonry/filter.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/contact.js"></script>
</body>

</html>