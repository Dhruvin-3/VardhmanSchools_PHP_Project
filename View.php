<?php
	session_start();
	include "header.php";
?>
<style type="text/css">
	.button
	{
		background-color=#DC3D3D;
		border:none;
		color:white;
		padding:15px 32px;
		text-align:"ceter";
		text-decoration:none;
		display:inline-block;
		font-size:14px;
	}
	td
	{
		background-color: ;
		text-align: center;
	}
</style>
<?php
	include "Config.php";
	// $id=$_GET['id']; 
	$pid=$_REQUEST["pid"];
	$qry="Select * from faculty where pid=$pid";
	$reqry=mysqli_query($con,$qry);
	echo "<table align='center' height='50%' width='50%'>";
	while($row=mysqli_fetch_row($reqry))
	{
		$photo="images/".$row[5];
		echo "<tr><td colspan='2' align='center'><img src='$photo' height=350 width=350 /></td></tr>";
		echo "<tr><td style='color:red'>Faculty Name: </td><td style='color:cyan'>$row[1]</td></tr>";
		echo "<tr><td style='color:red'>Designation: </td><td style='color:cyan'>$row[2]</td></tr>";
		echo "<tr><td style='color:red'>Qualification: </td><td style='color:cyan'>$row[3]</td></tr>";
		echo "<tr><td style='color:red'>Experience: </td><td style='color:cyan'>$row[4]</td></tr>";
	}
	echo "</table>";
	//echo "<a href='addtocart.php?pid=$pid' class='button'><h4>Add to Cart</h4></a>";
?>
<?php
	include "footer.php";
?>