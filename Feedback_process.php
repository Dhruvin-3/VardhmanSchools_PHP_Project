<?php
	$nm=$_POST["txtname"];
	$add=$_POST["txtaddress"];
	$city=$_POST["txtcity"];
	$phno=$_POST["txtphno"];
	$email=$_POST["email"];
	$comment=$_POST["txtcomment"];
	
	include "Config.php";
	$qry="insert into feedback (txtname,txtaddress,txtcity,txtphno,email,txtcomment) values('$nm','$add','$city','$phno','$email','$comment')";
	mysqli_query($con,$qry);
    //echo "insert into feedback (txtname,txtaddress,txtcity,txtphno,email,txtcomment) value('$nm','$add','$phno','$email','$comment')"; 
	header("location:Feedback_msg.php");
?>