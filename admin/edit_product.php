<?php
	include "header.php";
	include "config.php";
	$pid=$_REQUEST["id"];
	$qry="select * from product where pid=$pid";
	$res=mysql_query($qry);
	$val=mysql_fetch_row($res);
?>
<style type="text/css">
.button{
	background-color:#FF0000;
	border: none;
	color: white;
	padding: 8px 15px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 14px;
}
</style>
<center>
<form action="edit_product_update.php" method="post" enctype="multipart/form-data">
<table>
<tr>
	<th><h2 align="center"><font color="#0000FF">EDIT PRODUCT</h2></th>
</tr><tr>
	<td><input type="hidden" name="txtpid" value="<?php echo $val[0];?>"/></td>
</tr>
<tr><td><br></td></tr>
<tr>
	<td>Select-Category Name:</td>
	<td>
	<?php
		include("config.php");
		$str="select * from sub_category";
		$res=mysql_query($str);
		echo "<select name='subcatnm' style='width:100' value=".$val[1].">";
		while($arr=mysql_fetch_array($res))
		{
			if($arr[0]==$val[1])
				echo"<option value=".$arr[0]." selected>".$arr[2];
			else
				echo"<option value=".$arr[0].">".$arr[2];
		}
	?>
	</td>
</tr>
<tr>
	<td>Enter Name:</td>
	<td><input type="text" name="txtpnm" value="<?php echo $val[2]; ?>" pattern="[A-Za-z\s]{2,30}" required/></td>
</tr>
<tr>
	<td>Enter Price:</td>
	<td><input type="text" name="txtprice" value="<?php echo $val[3]; ?>" pattern="([0-9]{2,10})" title="Only Number" required/></td>
</tr>
<tr><td><br></td></tr>
<tr>
	<td>Select Image:</td>
	<td><img src="<?php $a="../images/".$val[4];echo $a;?>" height="80" width="170"></img>
	<input type="file" name="txtimg"/></td>
</tr>
<tr><td><br/></td></tr>
<tr>
	<td>Enter Details:</td>
	<td><input type="text" name="txtdesc" value="<?php echo $val[5]; ?>" pattern="[A-Za-z\s]{2,30}" required/></td>
</tr>


<tr>
	<td><input type="submit" name="submit" class="btn btn-primary btn-lg" value="Update Record"/></td>
	<td><input type="reset" name="reset" class="btn btn-danger btn-lg" value="Cancel"/></td>
</tr>
</table>
</form>
<?php include "footer.php"; ?>