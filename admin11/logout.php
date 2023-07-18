<?php
	session_start();
	unset($_SESSION['admin_unm']); 
	session_destroy();
	header("location:index.php");
?>