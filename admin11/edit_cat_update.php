<?php
	session_start();
	$catid=$_POST["txtcatid"];
	$catnm=$_POST["txtcatnm"];
	include "config.php";
	$qry="update category set cat_nm='$catnm' where cat_id=$catid";
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record Updated Successfully...";
		echo "<script>window.location='category.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,Try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>