<?php
  session_start();
  include("config.php");
  $count=0;
  if(isset($_POST['productdel']))
  {
     foreach($_POST['productdel']as $pid)
	 {
	   $count++;
	   mysql_query("delete from product where pid='".$pid."'");
	 }
	}
	if($count>0)
	{
	  $_SESSION['msg']="$count Record Deleted Successfully...";
	  header("location:product.php");
	 }
	 else
	 {
	   $errormsg="Something went wrong,Try again";
	   echo"<script type='text/javascript'>alert('$errormsg');</script>";
	  }
?>	  
	        