<?php 
	session_start();
	include "header.php";
?>

<style type="text/css">
.button
{
	background-color:#DC3D3D;
	border:none;
	color:white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display:inline-block;
	font-size: 14px;
}

</style>
<form action="login_check.php" method="post">
<table align="center">
<caption><h3>Admin Login</h3></caption>
<tr>
		<td><h4>Enter Username :</h4></td>
		<td><input type="text" name="unm" required/></td>
</tr>
<tr><td><br /></td></tr>
<tr>
		<td><h4>Enter Password :</h4></td>
		<td><input type="password" name="pwd" required/></td>
</tr>
<tr><td><br /></td></tr>
<tr>
		<td align="center"><input type="submit" class="button" name="submit" value="Login"/></td>
		<td align="center"><input type="reset" class="button" name="reset" value="Cancel"/></td>
</tr>
<tr><td><br></td></tr>
</table>
</form>
<?php 
	include "footer.php"; 
?>
