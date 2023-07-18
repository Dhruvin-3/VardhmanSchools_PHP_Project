<?php
	session_start();
	$id=$_POST["txtid"];
	$img=$_POST["txtimg"];
	include "config.php";
	$qry="update gallery set img='$img'where id=$id";
	echo $qry; 
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record Updated Sucessfully.....";
		echo "<script>window.location='gallery.php';</script>";
	}
	else
	{
		$errormsg="Somthing went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>