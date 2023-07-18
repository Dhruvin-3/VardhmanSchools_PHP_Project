<?php
	session_start();
	include "config.php";
	$count=0;
	if(isset($_POST['custdel']))
	{
		foreach($_POST['custdel'] as $id)
		{
			$count++;
			mysqli_query($con,"delete from contact where id='".$id."'");
		}
	}
	if($count>0)
	{
		$_SESSION['msg']="$count Record Deleted Successfully..";
		header("location:Contact.php");
	}
	else
	{
		$errormsg="something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>