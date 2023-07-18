<?php
	session_start();
	$id=$_REQUEST["id"];
	include "config.php";
	$qry="delete from contact where id=$id";
	$res=mysqli_query($con,$qry);
	if($res)
	{
		$_SESSION['msg']="Record Deleted Successfully..";
		echo "<script>window.location='Contact.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>