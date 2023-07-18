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
<link rel="stylesheet" href="">
<script src="">
</script>
<script>
$(function())
{
  $("datepicker").datepicker({
								changeMonth:true,
								changeYear:true
							});
	});
</script>
<h3 align="center" style="color: red; font-size: 50px">Registration Form</h3>
<form action="register_process.php" method="post">
<table align="center">
	
	<tr>
		<td><h4>Name:</h4></td>
		<td><input type="text" name="txtname" pattern="[A-Za-z\s]{2,30}" title="Only letter for name" required/></td>
	</tr>
	<tr>
		<td><h4>Birthdate:</h4></td>
		<td><input type="text" name="bdate" id="datepicker" required></td>
	</tr>
	<tr>
		<td><h4>Gender:</h4></td>
		<td><input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
		</td>
	</tr>
	<tr>
		<td><h4>Address:</h4></td>
		<td><textarea name="txtaddress" cols="15" required></textarea></td>
	</tr>
	<tr>
		<td><h4>City:</h4></td>
		<td><input type="text" name="txtcity" pattern="[A-Za-z]{2,30}" title="Only letter for city" required</td>
	</tr>
	<tr>
		<td><h4>Phone Number:</h4></td>
		<td><input type="text" name="txtphno" pattern="([6-9]{1})+([0-9]{9})" title="Only Number" maxlength="10" required></td>
	</tr>
	<tr>		
		<td><h4>E-Mail ID:</h4></td>
		<td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter proper Email ID" required></td>
	</tr>
	<tr>
		<td><h4>Username: </h4></td>
		<td><input type="text" name="txtunm" required></td>
	</tr>
	<tr>
		<td><h4>Password:</h4></td>
		<td><input type="password" name="txtpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/></td>
	</tr>
	<tr>
		<td><h4>Security Question:</h4></td>
		<td><select name="s_ques" required>
			<option value="Which is your Birthday City?">Which is your Birthday City?</option>
			<option value="What is your nick name?">What is your nick name?</option>
			<option value="Which is your favorite place?">Which is your favorite place?</option>
			<option value="Who is your childhood friend?">Who is your childhood friend?</option>
			</select>
		</td>
	</tr>
	<tr>
		<td><h4>Answer:</h4></td>
		<td><input type="text" name="txtans" required /></td>
	</tr>
	<tr>
		<td align="center"><input type="submit" class="button" name="Submit" value="Register" /></td>
		<td align="center"><input type="reset" class="button" name="reset" value="Cancel" /></td> 
	</tr>
	<tr>
		<td colspan="2" align="center"><h3><a href="login.php">Already have an Account?</a></h3></td>
	</tr>
</table>
</form>
<?php
	include "footer.php";
?>