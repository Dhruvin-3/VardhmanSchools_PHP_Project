<?php
	session_start();
	$id=$_REQUEST["id"];
	include "config.php";
	$qry="delete from bill_master where bill_id=$id";
	$res=mysql_query($qry);
	if($res)
	{
    	$_SESSION['msg']="Record Deleted Successfully.....";
		echo"<script>window.location='bill.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo"<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>