<?php
	session_start();
	include "header.php";
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vardhman Schools</title>
	</head>
	<style type="text/css">
		td{
			text-align: center;
			font-size: 30px;
		}
		h1
		{
			text-align: center;
			color: red;
			font-size: 50px;
		}
	</style>

	<body>
		<u><h1>School Campus</h1></u>
		<table align="center" cellpadding="20px">
			<tr>
				<th><img src="images/vce/classroom.jpg" height="200" width="300"></th>
				<th><img src="images/vce/playground.png" height="200" width="300"></th>
				<th><img src="images/vce/kids.jfif" height="200" width="300"></th>
			</tr>
			<tr>
				<td>Class Room</td>
				<td>Play Ground</td>
				<td>Kids Zone</td>
			</tr>
			<tr>
				<td><img src="images/vce/library2.png" height="200" width="300"></td>
				<td><img src="images/vce/projector.png" height="200" width="300"></td>
				<td><img src="images/vce/lab.jfif" height="200" width="300"></td>
			</tr>
			<tr>
				<td>Library</td>
				<td>Projector</td>
				<td>Computer Lab</td>
			</tr>
			<tr>
				<td><img src="images/vce/medical.png" height="200" width="300"></td>
				<td><img src="images/vce/sports.jpg" height="200" width="300"></td>
				<td><img src="images/vce/fire.jfif" height="200" width="300"></td>
			</tr>
			<tr>
				<td>Medical</td>
				<td>Sports</td>
				<td>Fire Safety</td>
			</tr>
		</table>
	</body>
</html>
<?php
	include "footer.php";
?>