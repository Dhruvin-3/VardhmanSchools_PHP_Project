<?php
	include "Config.php";
	$uname=$_POST['txtunm'];
	$sec=$_POST['txtsec'];
	$ans=$_POST['txtans'];
	$chk=mysqli_query($con,"Select txtunm,txtpwd,txtans FROM register where txtunm='".$uname."'");
	$row=mysqli_fetch_array($chk);
	if($row[2]==$ans)
	{
		$path="location: Forgot3.php? x=".$row[1]."";
		header ($path);
	}
	else
	{
		echo "<h1>Answer is Invalid <br>";
		echo "Click Here to go to <a href='register.php'>Register Page </a></h1>";
	}
?>