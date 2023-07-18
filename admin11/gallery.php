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
	padding:8px,15px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:14px;
}
</style>
<form name="catview" method="post" action="del_gallery1.php" onSubmit="return fundel()">
<center>
<caption><h2>Gallery</h2></caption>
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
	<td>
	<?php
		include "config.php";
		$qry="Select * from gallery";
		$res=mysql_query($qry);
		echo "<table border='2' cellpadding='5'>";
		echo "<tr><th>All Delete</th><th>Id</th><th>Image</th><th>Detail</th></tr>";
		while($row=mysql_fetch_array($res))
		{
			echo "<tr><td><input type='checkbox' name='productdel[]' value=".$row[0]."></td>";
			echo "<td> $row[0]</td>";
			echo "<td><img src='../images/".$row[1]."' height=100 width=100></td>";			
			echo "<td><a href='edit_gallery.php?id=$row[0]'>Edit<a>&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<a href='del_gallery.php?id=$row[0]'>Delete<a></td>";
			echo "<tr>";
		}
		echo "<tr><td colspan='7'><input type='checkbox' name='checkall' onClick='checkpro()'>Check All</td></tr></tr>";
		echo "<tr><td colspan='7'><input type='Submit' class='button' name='del' value='Delete'></td></tr></tr>";
		echo "<tr></tr></tr>";
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
		var a;
		a=confirm("are u sure");
		if(a!=1)
		{
			return false;
		}
		else
		{
			window.location="gallery.php";
		}
	return true;	
	}	
	function checkpro()
	{
		var a=0;
		for(a=0;a<window.document.forms[0].elements.length;a++)
		{
			if(window.document.forms[0].elements[a].name=="catdel[]")
			{
				window.document.forms[0].elements[a].checked=window.document.forms[0]checkall.checked;
			}
		}
	}
</script>

<?php 
	include "footer.php";
?>