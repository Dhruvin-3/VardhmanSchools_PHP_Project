<?php
	session_start();
	include "header.php";  
?>
<style type="text/css">
.button
{
	background-color:#99CC33;
	border:5;
	color:white;
	padding:8px 15px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:14px;
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
<table>
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
	</th>
</tr>
<tr>
	<th align="center"><h2><a href="add_product.php">Add product</a></h2></th>
</tr>
<tr>
	<td>
	<?php
		include "config.php";
		/**********************PAGING**********************/
		$id=1;
		$start=0;
		$limit=5;
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$start=($id-1)*$limit;
		}
		/**********************DISPLAY PRODUCT**********************/
		$qry="Select * from product LIMIT  $start,$limit";
		$res=mysql_query($qry);
		echo "<table border='2' cellpadding='5'>";
		echo "<tr><th>All Delete</th><th>Id</th><th>Sub Category Name</th><th>Name</th><th>Price</th><th>Image</th><th>Action</th><tr>";
		while($row=mysql_fetch_array($res))
		{
			echo "<tr><td><input type='checkbox' name='productdel[]' value=".$row[0]."></td>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[2]</td>";
			$catid=$row[1];
			$q="Select * from sub_category where sub_cat_nm=$catid";
			$r=mysql_query($q);
			$val=mysql_fetch_row($r);
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td><img src='../images/img/".$row[4]."' height='150px' width='150px'/></td>";
			echo "<td><a href='edit_product.php?id=$row[0]'>Edit<a>&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a href='del_product.php?id=$row[0]'>Delete<a></td>";
			echo "</tr>";
		}
		echo "<tr><td colspan='7'><input type='checkbox' name='checkall' onClick='checkpro()'>check all</td></tr></tr>";
		echo "<tr><td colspan='7'><input type='Submit' class='button' name='del' value='Delete'></td></tr></tr>";
		echo "</table>";
		/**********************PAGING**********************/
		$rows=mysql_num_rows(mysql_query("select * from product"));
		$total=ceil($rows/$limit);
		if($id>1)
		{
			echo "<a href='?id=".($id-1)."' class='button1'>PREVIOUS</a>";
		}
		if($id!=$total)
		{
			echo "<a href='?id=".($id+1)."' class='button1'>NEXT</a>";
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
</center>
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
<?php 
	include"footer.php"; 
?>