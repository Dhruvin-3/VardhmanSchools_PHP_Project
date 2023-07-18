<?php
	session_start();
	$unm=$_POST["unm"];
	$pwd=$_POST["pwd"];
	include "config.php";
	$qry="Select * from admin_login where unm='$unm' and pwd='$pwd'";
	$res=mysql_query($qry);
	if(mysql_num_rows($res)<=0)
	{ 
		header("location:index.php");
		exit;
	}
	$_SESSION['unm']=$unm;
	header("location:home.php");
?>