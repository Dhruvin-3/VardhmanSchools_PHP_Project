<?php 
	session_start();
	include("config.php");
	$count=0;
	if(isset($_POST['feeddel']))
	{
		foreach($_POST['feeddel'] as $id)
		{
			$count++;
	 		mysqli_query($con,"delete from feedback where id='".$id."'");
	 	}
	 }
	 if($count>0)
	 {
	 	$_SESSION['msg']="$count Record Deleted Successfully..";
	 	echo "<script>window.location='feedback.php';</script>";
	 }
	 else 
	 {
	   	$_SESSION['msg']="Something went wrong,try again";
	   	echo "<script type='text/javascript'>alert('$errormsg');</script>";
	 }
?>