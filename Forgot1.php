<?php
	session_start();
	include "Header.php";
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
<h3 align="center" style="color: red; font-size: 50px"><u>Forgot Password</u></h3>
<form action="Forgot1_check.php" method="post">
	<table align="center">
		<tr>
			<th>Enter Your User Name: </th>
			<td>
				<input type="text" name="txtunm"  required/>
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"> <input type="Submit" class="button" name="submit" value="Send"/></td>
		</tr>
	</table><br>
</form>
<?php
	include "Footer.php";
?>
