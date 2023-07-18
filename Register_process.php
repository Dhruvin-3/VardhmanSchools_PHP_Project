<?php
	$nm=$_POST["txtname"];
	$bdate=$_POST["bdate"];
	$gender=$_POST["gender"];
	$add=$_POST["txtaddress"];
	$city=$_POST["txtcity"];
	$phno=$_POST["txtphno"];
	$email=$_POST["email"];
	$unm=$_POST["txtunm"];
	$pwd=$_POST["txtpwd"];
	$s_ques=$_POST["s_ques"];
	$answer=$_POST["txtans"];

	include "Config.php";
	$qry="insert into register(txtname,bdate,gender,txtaddress,txtcity,txtphno,email,txtunm,txtpwd,s_ques,txtans) value('$nm','$bdate','$gender','$add','$city','$phno','$email','$unm','$pwd','$s_ques','$answer')";
	mysqli_query($con,$qry);
	//echo "insert into register(txtname,bdate,gender,txtaddress,txtcity,txtphno,email,txtunm,txtpwd,s_ques,txtans) value('$nm','$bdate','$gender','$add','$city','$phno','$email','$unm','$pwd','$s_ques','$answer')";
	header("location:Login.php");
?>