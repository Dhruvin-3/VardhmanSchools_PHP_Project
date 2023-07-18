<?php
	session_start();
	$subcatid=$_REQUEST["id"];
	include "config.php";
	$qry="delete from sub_category where sub_cat_id=$subcatid";
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record Deleted Successfully..";
		echo "<script>window.location='subcategory.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>