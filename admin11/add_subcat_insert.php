<?php
	session_start();
	$catnm=$_POST["catnm"];
	$subcatnm=$_POST["txtsubcatnm"];
	include "config.php";
	$qry="insert into sub_category(cat_id,sub_cat_nm) values($catnm,'$subcatnm')";
	$res=mysql_query($qry);
	echo $res;
	if($res)
	{
		$_SESSION['msg']="Record Added Successfully...";
		echo "<script>window.location='subcategory.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>