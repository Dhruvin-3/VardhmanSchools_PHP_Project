<?php 
	session_start();
	include "header.php";
?>
<style type="text/css">
	.button
	{
		background-color: #DC3D3D;
		border:none;
		color:white;
		padding:8px 16px;
		text-align: center;
		text-decoration: none;
		display:inline-block;
		font-size:10px;
	}
</style>
<h1 align="center"  style="color: red; font-size: 50px;">Faculties</h1>
<form action="View.php" method="get">
<?php
	//$subid=$_REQUEST["subid"];
	
	include "Config.php";
	$q="Select * from faculty";
	$r=mysqli_query($con,$q);
	$val=mysqli_fetch_row($r);
	//echo "<center><h1>$val[2]</h1></center><br><hr>";
	$perpage=3;
	if(isset($_REQUEST["s1"]))
	{
		$page=($_REQUEST["s1"]-1)*$perpage;
	}
	else
		$page=0;
	$qry="Select * from faculty ";
	$res=mysqli_query($con,$qry);
	echo "<table><tr>";
	$k=0;
	while($row=mysqli_fetch_array($res))
	{
		$photo="images/$row[5]";
		echo "<td><a href='view.php?pid=$row[0]'><img align=center src='$photo' height='250px' width='250px'/></a><br>";
		echo "<a href='view.php?pid=$row[0]'>$row[1] </a> </td>";
		$k++;
		if($k%3==0)
			echo "</tr>";
	}
	echo "</table>";
	//$subid=$_REQUEST['subid'];
	$qry="select * from faculty";
	$res=mysqli_query($con,$qry);
	$totrow=mysqli_num_rows($res);
	//echo "<input type=hidden value='$subid' name='subid'>";
?>
	<table border=1 bordercolor="red" >
		<tr>
			<td colspan="3" >
				<select name="s1">
					<?php 
						for($x=1;$x<=ceil($totrow/$perpage);$x++)
						{
							if($_REQUEST["s1"]==$x)
								echo "<option select>$x</option>";
							else	
								echo "<option>$x</option>";
						}
					?>
				</select>
				<input type="submit" value="Go" class="button"/>
			</td>
		</tr>
	</table>
</form>
<?php
	include "footer.php";
?>