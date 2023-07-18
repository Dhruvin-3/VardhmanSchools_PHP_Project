<?php
	session_start();
	include ("config.php");
	$count=0;
	if(isset($_POST['catdel']))
	{
		foreach($_POST['catdel']as $pid)
		{
			$count++;
			mysql_query("delete from gallery where id='".$id."'");
		}
	}
	if($count>0)
	{
		$_SESSION['msg']="$count Record Deleted Successfully....";
		header("location:gallery.php");
	}
	else
	{
		$erroemsg="Something went wrong,try again";
		echo "<script type='text/javaseript'>alert('$errormsg');</script>";
	}
?>