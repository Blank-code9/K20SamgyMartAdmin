<?php
	if (empty($_SESSION['sess'])) {
		echo "<script>window.open('../','_self');</script>";
	}		

	$department_id = $_SESSION['sess'];
?> 