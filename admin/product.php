<?php
	session_start();
	include "header.php";  ?>
<style type="text/css">
.button{
	background-color: #DC3D3D;
	border: none;
	color: white;
	padding: 8px 15px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 14px;
}
#content
{
	width: 900px;
	margin: 0 auto;
	font-family:Arial,Helvetica,sans-serif;
}
.page
{
	float: right;
	margin: 0;
	padding: 0;
}
.page li
{
	list-style: none;
	display:inline-block;
}
.page li a,.current
{
	display: block;
	padding: 5px;
	text-decoration:none;
	color:#8A8A8A;
}
.current
{
	font-weight:bold;
	color:#000;
}
.button1
{
	padding: 5px 15px;
	text-decoration: none;
	background: #333;
	color: #F3F3F3;
	font-size: 13PX;
	border-radius: 2PX;
	margin: 0 4PX;
	display: block;
	float:  left;
}
</style>
<div id="content">
<center>
<form name="productview" method="post" action="del_product1.php" onSubmit="return fundel()">
<table align="center">
<tr>
	<?php
		if(isset($_SESSION['msg']))
		{
			echo "<th style='background-color:pink;'>";
			echo ($_SESSION['msg']);
			unset($_SESSION['msg']);
			echo "</th>";
		}
	?>
	<br/>
</tr>
<tr>
	<th align="left"><h2><font color="#3300CC"><a href="add_product.php">Add Faculty</a></font></th>
</tr>
<tr>
	<td>
	<br/>
	<?php
		include "Config.php";
		/**********************PAGING**********************/
		$id=1;
		$start=0;
		$limit=5;
		if(isset($_GET['pid']))
		{
			$id=$_GET['pid'];
			$start=($id-1)*$limit;
		}
		/**********************DISPLAY PRODUCT**********************/
		$qry="Select * from Faculty LIMIT  $start,$limit";
		$res=mysqli_query($con,$qry);
		echo "<table border='2' cellpadding='5' width=100%>";
		echo "<tr><th><center>All Delete</center></th><th><center>Id</center></th><th><center> Name</center></th> <th><center>Designation</center></th><th><center>Qualification</center></th><th><center>Experience</center></th><th><center>Photo</center></th> <th><center>Action</center></th><tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr><td align=center><input type='checkbox' name='productdel[]' value=".$row[0]."></td>";
			echo "<td align=center>$row[0]</td>";
			$catid=$row[1];
			$q="Select * from Faculty where pid=$catid";
			$r=mysqli_query($con,$q);
			//$val=mysqli_fetch_row($r);
			echo "<td align=center>$row[1]</td>";
			echo "<td align=center>$row[2]</td>";
			echo "<td align=center>$row[3]</td>";
			echo "<td align=center>$row[4]</td>";
			echo "<td align=center><img src='../images/".$row[5]."' height='150px' width='150px'/>";
			echo "<td align=center>";
			echo "<a href='del_product.php?id=$row[0]'>Delete<a></td>";
			echo "</tr>";
		}
		echo "<tr><td colspan='7'><input type='checkbox' name='checkall' onClick='checkpro()'>check all</td></tr></tr>";
		echo "<tr><td colspan='7'><input type='Submit' class='btn btn-danger' name='del' value='Delete'></td></tr></tr>";
		echo "</table>";
		/**********************PAGING**********************/
		$rows=mysqli_num_rows(mysqli_query($con,"select * from faculty"));
		$total=ceil($rows/$limit);
		if($id>1)
		{
			echo "<a href='?id=".($id-1)."' class='btn btn-info'>PREVIOUS</a>";
		}
		if($id!=$total)
		{
			echo "<a href='?id=".($id+1)."' class='btn btn-info'>NEXT</a>";
		}
		echo "<ul class='page'>";
		for($i=1;$i<=$total;$i++)
			{
				if($i==$id)
				{
					echo "<li class='current'>".$i."</li>";					
				}
				else
				{
					echo "<li><a href='?id=".$i."'>".$i."</a></li>";					}
				}
			
		echo "</ul>";
	?>
	</td>
</tr>
</table>
</form>
</div>
<script>
	function fundel()
	{
		var a;
		a=confirm("are u sure");
		if(a!=1)
		{
			return false;
		}
		else
		{
			window.location="product.php";
		}
		return true;
	}
	function checkpro()
	{
		var a=0;
		for(a=0;a<window.document.forms[0].elements.length;a++)
		{
			if(window.document.forms[0].elements[a].name=="productdel[]")
			{
	window.document.forms[0].elements[a].checked=window.document.forms[0].checkall.checked;
			}
		}
	}
</script>