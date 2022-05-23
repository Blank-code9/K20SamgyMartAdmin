<?php

	use PHPMailer\PHPMailer\PHPMailer;

	date_default_timezone_set('Asia/Manila');
	Class Model {
		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "data";
		private $conn;

		public function __construct() {
			try {
				$this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);	
			} catch (Exception $e) {
				echo "Connection failed" . $e->getMessage();
			}
		}

		//ADMIN - SIGN IN
		public function signIn($uname, $pword) {
			$query = "SELECT id, pword FROM admin WHERE uname = ?";
			if($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param("s", $uname);
				$stmt->execute();
				$stmt->bind_result($id, $hashed_pass);
				$stmt->store_result();
				if($stmt->num_rows > 0) {
					if($stmt->fetch()) {
						if (password_verify($pword, $hashed_pass)) {
							$_SESSION['sess'] = $id;
							echo "<script>window.open('admin/index','_self');</script>";
							exit();
						}

						else {
							echo "<center><h5 style='color: red;'>Incorrect Password</h5></center>";
							if (empty($_SESSION['lattempt'])) {
								$_SESSION['lattempt'] = 1;
							}
							
							else {
								switch ($_SESSION['lattempt']) {
									case 1:
										$_SESSION['lattempt']++;
										break;
									case 2:
										$_SESSION['lattempt']++;
										break;
									case 3:
										$_SESSION['lattempt']++;
										break;
									default:
										// unset($_SESSION['lattempt']);
										// setcookie('rlimited', '10', time() + (60 * 30), "/");
										// setcookie('expiration_date_admin', time() + (60 * 30), time() + (60 * 30), "/");
										echo "<script>window.open('admin.php','_self');</script>";
								}
							}
						}
					}
				}
				else {
					echo "<script>alert('Email not found in database!');</script>";
				}
				$stmt->close();
			}
			$this->conn->close();
		}

	}
?>