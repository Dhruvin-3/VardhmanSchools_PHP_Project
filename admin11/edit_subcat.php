<?php
	include"header.php";
	include "config.php";
	$subcatid=$_REQUEST["id"];
	$qry="select *from sub_category where sub_cat_id=$subcatid";
	$res=mysql_query($qry);
	$val=mysql_fetch_array($res);
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

<form action="edit_subcat_update.php" method="post">
<table>
<tr>
	<th><h2>Edit Subcategory</h2></th>
</tr>

<tr>
	<td><input type="hidden" name="txtsubcatid" value="<?php echo $val[0]; ?>"/></td>
</tr>

<tr><td><br></td></tr>

<tr>
	<td>Select Category Name:</td>
	<td>
		<?php
			include "config.php";
			$str="select *from category";
			$res=mysql_query($str);
			echo "<select name='catnm' style='width:100' value=".$val[1].">";
			while($arr=mysql_fetch_array($res))
			{
				if($arr[0]==$val[1])
					echo "<option value=".$arr[0]." selected>".$arr[1];
				else
					echo "<option value=".$arr[0].">".$arr[1];
			}
			echo "</select>";
		?>
	</td>
</tr>

<tr>
	<td> Enter SubCategory Name:</td>
	<td><input type="text" name="txtsubcatnm" value="<?php echo $val[2]; ?>" pattern="[A-Za-z\s]{2,30}" reqiured/></td>
</tr>

<tr>
	<td><input type="submit" name="submit" class="button" value="Update Record"/></td>
	<td><input type="reset" name="reset" class="button" value="Cancel"/></td>
</tr>
</table>
</form>

<?php
	include "footer.php";
?>