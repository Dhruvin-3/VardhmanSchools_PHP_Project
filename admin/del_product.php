<?php
  session_start();
  $pid=$_REQUEST["id"];
  include "config.php";
  $qry="delete from faculty where pid=$pid";
  $res=mysqli_query($con,$qry);
  if($res)
  {
    $_SESSION['msg']="Record Deleted Successfully...";
	echo"<script>window.location='product.php';</script>";
   }
   else
   {
      $errormsg="Something went wrong,Try again";
	  echo"<script type='text/javascript'>alert('$errormsg');</script>";
   }
?>	
	
		  	