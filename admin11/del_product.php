<?php
	session_start();
	$pid=$_REQUEST["id"];
	include "config.php";
	$qry="delete from product where pid=$pid";
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record Deleted Successfully...";
		echo "<script>window.location='product.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>