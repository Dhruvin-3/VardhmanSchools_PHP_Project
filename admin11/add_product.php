<?php
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

<form action="add_product_insert.php" method="post" enctype="multipart/form-data">
<table>

<tr>
	<th><h2>Add Product</h2></th>
</tr>

<tr><td><br /></td></tr>

<tr>
	<td>Select Sub-Category Name:</td>
	<td><select name="subcatnm" required>
		<?php
			include "config.php";
			$qry="select *from sub_category";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
				echo "<option value=$row[0]>$row[2]</option>";
			}
		?>
		</select>
	</td>
</tr>

<tr><td><br /></td></tr>

<tr>
	<td>Enter Name:</td>
	<td><input type="text" name="txtpnm" pattern="[A-Za-z\s]{2,30}" required /></td>
</tr>

<tr><td><br /></td></tr>

<tr>
	<td>Enter Price:</td>
	<td><input type="text" name="txtprice" pattern="([0-9]{2,10})" title="Only Number" required /></td>
</tr>

<tr><td><br /></td></tr>

<tr>
	<td>Enter Image:</td>
	<td><input type="file" name="txtimg" required /></td>
</tr>

<tr><td><br /></td></tr>

<tr>
	<td><input type="submit" name="submit" class="button" value="Add Record"/></td>
	<td><input type="reset" name="reset" class="button" value="Cancel"/></td>
</tr>

</table>
</form>

<?php
	include "footer.php";
?>