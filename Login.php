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
	padding:15px 32px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:14px;
}
</style>
<form action="Login_Check.php" method="post">
<table align="center">
	<h3 align="center" style="color: red; font-size: 50px;">Login Form</h3>
	<tr>
		<td><h4>Enter User Name:</h4></td>
		<td><input type="text" name="txtunm" required/></td>
	</tr>
	<tr><td><br></td></tr>
	<tr>
		<td><h4>Enter Password: </h4></td>
		<td><input type="password" name="txtpwd" required/></td>
	</tr>
	
	<tr><td><br></td></tr>
	<tr>
		<td align="center"><input type="submit" class="button" name="Submit" value="Login"/></td>
		<td align="center"><input type="reset" class="button" name="Reset" value="Cancel"/></td>
	</tr>
	
	<tr><td><br></td></tr>
	
	<tr> 
		<td colspan="2" align="center"><h3><a href="register.php">Register Now</a></h3></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><h3><a href="Forgot1.php">Forgot Password</a></h3></td>
	</tr>
</table>
</form>
<?php
	include "footer.php";
?>