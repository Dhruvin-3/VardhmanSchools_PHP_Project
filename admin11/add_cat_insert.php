<?php
	session_start();
	$catnm=$_POST["txtcatnm"];
	include "config.php";
	$qry="insert into category(cat_nm) values('$catnm')";
	$res=mysql_query($qry);
	echo $res;
	if($res)
	{
		$_SESSION['msg']="Record Added Successfully....";
		echo "<script>window.location='category.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong, Try Again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>