<?php
	sessionstart();
	include "config.php";
	$count=0;
	if(isset($_POST['catdel']))
	{
		foreach($_POST['catid'] as $catid)
		{
			$count++;
			mysql_query("delete from category where cat_id='".$catid."'");
		}
	}
	if($count>0)
	{
		$_SESSION['msg']="$countRecord Deleted Successfully...";
		header("locatin:category.php");
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>