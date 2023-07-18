<?php
	include "config.php";
	$pnm=$_POST['txtpnm'];
	$subcatid=$_POST['subcatnm'];
	$price=$_POST['txtprice'];
	$path="../images/img/".$_FILES['txtimg']['name'];
	$path1=$_FILES['txtimg']['name'];
	move_uploaded_file($_FILES['txtimg']['tmp_name'],$path);
	$qry="insert into product(sub_cat_id,pnm,price,img)values($subcatid,'$pnm','$price','$path1')";
	$res=mysql_query($qry);
	if($res)
	{
		$_SESSION['msg']="Record added successfully...";
		echo "<script>window.location='product.php';</script>";
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>