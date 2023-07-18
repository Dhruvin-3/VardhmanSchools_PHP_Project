<?php
	session_start();
	$unm=$_POST["txtunm"];
	$pwd=$_POST["txtpwd"];
	include "config.php";
	$qry="Select * from register where txtunm='$unm' and txtpwd='$pwd'";
	echo $qry;
	$res=mysqli_query($con,$qry);
	if(mysqli_num_rows($res)<=0)
	{
		echo "<script>window.location='Login.php?flag=1';</script>";
		exit;
	}
	$_SESSION['txtunm']=$unm;
	header("location:home.php");
?>