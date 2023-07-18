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
	padding:15px 32px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:14px;
}
</style>

<form name="subcatview" method="post" action="del_subcat1.php" onSubmit="return fundel()">
<center>
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
</tr>

<tr>
	<th align="left"><h2><a href="add_subcat.php">Add Sub-Category</a></h2></th>
</tr>

<tr>
	<td>
	<?php
		include "config.php";
		$qry="select *from sub_category";
		$res=mysql_query($qry);
		echo "<table border='2' cellpadding='5'>";
		echo "<tr><th>All Delete</th> <th>Sub Category</th> <th>Category</th> <th>Sub Category Name</th> <th>Action</th></tr>";
		while($row=mysql_fetch_array($res))
		{
			echo "<tr><td><input type='checkbox' name='subcatdel[]' value=".$row[0]."></td>";
			echo "<td>$row[0]</td>";
			$catid=$row[1];
			$q="select *from category where cat_id=$catid";
			$r=mysql_query($q);
			$val=mysql_fetch_row($r);
			echo "<td>$val[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td><a href='edit_subcat.php?id=$row[0]'>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a href='del_subcat.php?id=$row[0]'>Delete</a></td>";
			echo "</tr>";
		}
		echo "<tr><td colspan='5'><input type='checkbox' name='checkall' onclick='checkpro()'>Check All</td></tr>";
		echo "<tr><td colspan='5'><input type='submit' class='button' name='del' value='Delete'></td></tr>";
		echo "</table>";
	?>
	</td>
</tr>

</table>
</center>
</form>
<script>
	function fundel()
	{
		vat a;
		a=confirm("are u sure");
		if(a!=1)
		{
			return false;
		}
		else
		{
			window.location="subcategory.php";
		}
		return true;
	}
	function checkpro()
	{
		var a=0;
		for(a=0;a<window.document.forms[0].elements.length;a++)
		{
			if(window.document.forms[0].elements[a].name=="subcatdel[]")
			{
				window.document.forms[0].elements[a].checked=window.document.forms[0].checkall.checked;
			}
		}
	}
</script>

<?php
	include "footer.php";
?>