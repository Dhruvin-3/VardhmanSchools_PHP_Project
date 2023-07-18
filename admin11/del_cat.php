<?php
	session_start();
	$catid=$_REQUEST["id"];
	include "config.php";
	$qry="delete from category where cat_id=$catid";
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record Deleted Successfully...";
		echo "<script>window.location='category.php';</script>";
	}
	else
	{
		$errormsg="Somthing went wrong,Try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>