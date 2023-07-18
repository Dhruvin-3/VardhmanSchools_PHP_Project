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
<h3 align="center">Congratulations......</h3>
<form action="Login.php" method="post">
	<table align="center">
		<tr>
			<th>Your Password: </th>
			<td>
				<input type="text" name="txtunm" value="<?php $a=$_REQUEST['x']; echo $a; ?>"  disabled="disabled"/>
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><input type="submit" class="button" value="Send"></td>
		</tr>
	</table>
</form>
<?php
	include "footer.php"
?>