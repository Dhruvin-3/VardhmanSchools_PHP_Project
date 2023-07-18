<?php
	session_start();
	$id=$_REQUEST["id"];
	include "config.php";
	$qry="delete from gallery where id=$id";
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record Deleted Successfully...";
		echo "<script>window.location='gallery.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg')</script>";
	}
?> 