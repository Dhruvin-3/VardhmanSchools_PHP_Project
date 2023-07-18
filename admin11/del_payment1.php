<?php 
	session_start();
	include("config.php");
	$count=0;
	if(isset($_POST['paymentdel']))
	{
		foreach($_POST['paymentdel'] as $id)
		{
			$count++;
	 		mysql_query("delete from payment where id='".$id."'");
	 	}
	 }
	 if($count>0)
	 {
	 	$_SESSION['msg']="$count Record Deleted Successfully..";
	 	echo "<script>window.location='payment.php';</script>";
	 }
	 else 
	 {
	   $_SESSION['msg']="Something went wrong,try again";
	   echo "<script type='text/javascript'>alert('$errormsg');</script>";
	 }
?>