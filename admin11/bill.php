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

<form name="billview" method="post" action="del_bill1.php" onSubmit="return fundel()">
<center>
<caption><h2>Bill</h2></caption>
<table>
<tr>
	<th>
	<?php
		if(isset($_SESSION['msg']))
		{
			echo "<th style='background-color:pink'>";
			echo ($_SESSION['msg']);
			unset($_SESSION['msg']);
			echo "</th>";
		}
	?>
	</th>
</tr>

<tr>
	<td>
		<?php
			include "config.php";
			$qry="select *from bill_master";
			$res=mysql_query($qry);
			echo "<table border='2' cellpadding='5'>";
			echo "<tr><th> All Delete</th> <th>Bill_Id</th> <th>Bill_Date</th> <th>Total</th> <th>User Name</th> <th>Action</th></tr>";
			while($row=mysql_fetch_array($res))
			{
				echo "<tr><td><input type='checkbox' name='billdel[]' value=".$row[0]."></td>";
				echo "<td>$row[0]</td>";
				echo "<td>$row[1]</td>";
				echo "<td>$row[2]</td>";
				echo "<td>$row[3]</td>";
				echo "<td><a href='del_bill.php?id=$row[0]'>Delete</a></td>";
				echo "</tr>";	
			}
			echo "<tr><td colspan='6'><input type='checkbox' name='checkall' onclick='checkpro()'>Check All</td></tr></tr>";
			echo "<tr><td colspan='6'><input type='submit' class='button' name='del' value='Delete'></td></tr></tr>";
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
			window.location="bill.php";
		}
		return true;
	}
	
	function checkpro()
	{
		var a=0;
		for(a=0;a<window.document.forms[0].elements.length;a++)
		{
			if(window.document.forms[0].element[a].name=="feeddel[]")
			{	
				window.document.forms[0].elements[a]checked=window.document.forms[0].checkall.checked;
			}
		}
	}
</script>

<?php
	include "footer.php";
?>	
			
	