<?php
	include "header.php";
	include "config.php";
	$id=$_REQUEST["id"];
	$qry="Select * from gallery where id=$id";
	$res=mysql_query($qry);
	$val=mysql_fetch_array($res);
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
</style>
<form action="edit_gallery_update.php" method="post">
<table>
<tr>
	<th><h2>EDIT GALLERY</h2></th>
</tr>
<tr>
	<td><input type="hidden" name="txtid" value="<?php echo $val[0];?>"></td>
</tr>

<tr>
	<td>Enter Image</td>
	<td><input type="text" name="txtimg" value="<?php echo $val[1];?>" required /></td>
</tr>

	<td><input type="submit" name="submit" class="button" value="Update Record" /></td>
	<td><input type="reset" name="reset" class="button" value="Cancle" /></td>
</tr>
</table>
</form>

<?php 
	include "footer.php";
?> 