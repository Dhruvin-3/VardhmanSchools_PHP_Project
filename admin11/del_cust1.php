<?php
	session_start();
	include "config.php";
	$count=0;
	if(isset($_POST['custdel']))
	{
		foreach($_POST['custdel'] as $id)
		{
			$count++;
			mysql_query("delete from register where id='".$id."'");
		}
	}
	if($count>0)
	{
		$_SESSION['msg']="$count Record Deleted Successfully..";
		header("location:customer.php");
	}
	else
	{
		$errormsg="something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>