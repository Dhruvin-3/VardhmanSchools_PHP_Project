<?php
	session_start();
	$pid=$_POST["txtpid"];
	$subcatnm=$_POST["subcatnm"];
	$pnm=$_POST["txtpnm"];
	$price=$_POST["txtprice"];
	include "config.php";
	if(empty($_FILES['txtimg']['name']))
	{
		$str="update product set sub_cat_id=$subcatnm,pnm='$pnm',price=$price where pid=$pid";
	}
	else
	{
		$path="../images/img/".$_FILES['txtimg']['name'];
		$path1=$_FILES['txtimg']['name'];
		move_uploaded_file($_FILES['txtimg']['tmp_name'],$path);
		$str="update product set sub_cat_id=$subcatnm,pnm='$pnm',price=$price,img='$path1' where pid=$pid";
	}
	$res=mysql_query($str);
	if($res)
	{
		$_SESION['msg']="Record Update Successfully...";
		echo "<script>window.location='product.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,Try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>