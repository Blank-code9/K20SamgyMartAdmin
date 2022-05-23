<?php

	session_start();
	unset($_SESSION['sess']);
	echo "<script>window.open('../index', '_self');</script>";

?>