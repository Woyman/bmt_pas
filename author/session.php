<?php
// session_start();
	if (!$_SESSION['author']){	
		header("location: ../index.php?page=login-author");
		// break;
		// echo "noting";
	}	
	else {
		
		// header("location: index.php?page=dashboard");

	}
?>