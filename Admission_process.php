<?php
	session_start();
	include "header.php";
?>
<?php
	$snm=$_POST["surname"];
	$nm=$_POST["name"];
	$fnm=$_POST["father_name"];
	$phno=$_POST["contact"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];
	$category=$_POST["category"];
	$std=$_POST["standard"];
	$per=$_POST["percentage"];
	$address=$_POST["address"];

	include "Config.php";
	
	$qry="insert into admission (surname,name,father_name,contact,email,gender,category,standard,percentage,address) values('$snm','$nm','$fnm','$phno','$email','$gender','$category','$std','$per','$address')";
	mysqli_query($con,$qry);
	echo "<h1 align=center style='color:red; font-size:50px;'>Form Submitted</h1>";
?>
<?php
	include "footer.php";
?>