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

<form action="add_cat_insert.php" method="post">
<table>
<tr>
	<th><h2> Add Category</h2></th>
</tr>

<tr><td><br /></td></tr>

<tr>
	<td>Enter Category Name:</td>
	<td><input type="text" name="txtcatnm" pattern="[A-Za-z\s]{2,30}" required /></td>
</tr>

<tr>
	<td><input type="submit" name="submit" class="button" value="Add Record" /></td>
	<td><input type="reset" name="reset" class="button" value="Cancel" /></td>
</tr>

</table>
</form>

<?php
	include "footer.php";
?>
