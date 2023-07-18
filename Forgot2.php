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
<form action="Forgot2_Check.php" method="post">
	<table align="center">
		<tr>
			<th colspan="2">
				<h3><?php $a=$_REQUEST['z']; echo $a; ?></h3>
				<input type="hidden" name="txtunm" value="<?php $b=$_REQUEST['x']; echo $b; ?>">
				<input type="hidden" name="txtsec" value="<?php $c=$_REQUEST['z']; echo $c;?>"
			</th>
		</tr>
		
		<tr>
			<th>Answer:</th>
			<td><input type="text" name="txtans" required></td>
		</tr>
		
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Send" class="button"></td>
		</tr>
	</table>
</form>
<?php
	include "Footer.php";
?>