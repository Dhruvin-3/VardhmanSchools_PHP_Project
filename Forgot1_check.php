<?php
	include "Config.php";
	$unm=$_POST['txtunm'];
	$chk=mysqli_query($con,"Select txtunm,txtpwd,s_ques FROM register where txtunm='".$unm."'");
	$row=mysqli_fetch_array($chk);
	if($row[0]!="" || $row[0]!=null)
	{
		$path="location:Forgot2.php?x=".$row[0]."& z=".$row[2]."";
		header($path);
	}
	else
	{
		echo "<h3>Username is Invalid</h3>";
		echo "<h2>Click Here to go to <a href='register.php'>Register Page</a></h2>";
	}
?>