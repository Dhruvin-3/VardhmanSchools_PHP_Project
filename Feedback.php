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
<form action="Feedback_process.php" method="post">
	<h1 align="center" style="color:red; font-size: 50px;">Feedback Form</h1>
	<table align="center">
		<tr>
			<td><h4>Name: </h4></td>
			<td><input type="text" name="txtname" pattern="[A-Za-z\s]{2,30}" title="Only letter for name" required/></td>
		</tr>
		<tr>
			<td><h4>Address:</h4></td>
			<td><textarea name="txtaddress" cols="15" required></textarea></td>
		</tr>
		<tr>
			<td><h4>City:</h4></td>
			<td><input type="text" name="txtcity" pattern="[A-Za-z\s]{2,30}" title="Only letter for city" required/></td>
			
		</tr>
		<tr>
			<td><h4>Phone Number:</h4></td>
			<td><input type="text" name="txtphno" pattern="[0-9]{10}" title="Only Number" maxlength='10' required/></td>
		</tr>
		<tr>
			<td><h4>Email Id:</h4></td>
			<td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter proper Email Id" required/></td>
		</tr>
		<tr>
			<td><h4>Comment:</h4></td>
			<td><textarea name="txtcomment" cols="15" required/></textarea></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" class="button" name="submit" value="Send"/></td>
			<td align="center"><input type="reset" class="button" name="reset" value="Cancel"/></td>
		</tr>
	</table>
</form>
<?php
	include "footer.php";
?>