<?php
	include "header.php";
	include "config.php";
	$catid=$_REQUEST["id"];
	$qry="select *from category where cat_id=$catid";
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

<form action="edit_cat_update.php" method="post">
<table>
<tr>
	<th><h2> Edit Category</h2></th>
</tr>

<tr>
	<td><input type="hidden" name="txtcatid" value="<?php echo $val[0]; ?>"/></td>
</tr>

<tr><td><br></td></tr>

<tr>
	<td>Enter Category Name:</td>
	<td><input type="text" name="txtcatnm" value="<?php echo $val[1]; ?>" pattern="[A-Za-z\s]{2,30}" required></td>
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