<?php
	session_start();
	$subcatid=$_POST["txtsubcatid"];
	$catnm=$_POST["catnm"];
	$subcatnm=$_POST["txtsubcatnm"];
	include "config.php";
	$qry="update sub_category set cat_id=$catnm,sub_cat_nm='$subcatnm' where sub_cat_id=$subcatid";
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record Updated Successfully...";
		echo "<script>window.location='subcategory.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>