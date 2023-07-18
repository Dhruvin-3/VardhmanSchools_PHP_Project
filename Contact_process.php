<?php
	$nm=$_POST["txtname"];
	$phno=$_POST["phno"];
	$email=$_POST["email"];
	$msg=$_POST["msg"];

	include "Config.php";
	$qry="insert into contact(txtname,email,phno,msg) value('$nm','$email','$phno','$msg')";
	mysqli_query($con,$qry);
	//echo "insert into register(txtname,bdate,gender,txtaddress,txtcity,txtphno,email,txtunm,txtpwd,s_ques,txtans) value('$nm','$bdate','$gender','$add','$city','$phno','$email','$unm','$pwd','$s_ques','$answer')";
	header("location:Contact.php");
?>