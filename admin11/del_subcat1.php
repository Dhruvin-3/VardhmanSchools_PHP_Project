<?php
	session_start();
	inclue "config.php";
	$count=0;
	if(isset($_POST['subcatdel']))
	{
		foreach($_POST['subcatdel'] as $subcatid)
		{
			$count++;
			mysql_query("delete from sub_category where sub_cat_id='".$subcatid."'");
		}
	}
	if($count>0)
	{
		$_SESSION['msg']="$count Record Deleted Successfully...";
		header("location:subcategory.php");
	}
	else
	{
		$errormsg="Something went wrong,try again";
		echo "<script type='text/javascript'>alert('$errormsg');</script>";
	}
?>