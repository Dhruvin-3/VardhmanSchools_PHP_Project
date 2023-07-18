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
		padding:8px 16px;
		text-align:center;
		text-decoration:none;
		display:inline-block;
		font-size:10px
	}
	dd
	{
		color:tomato;
		font-size: 20px;
	}
</style>
<table border:10px>
	<h1 align="center" style="color: red; font-size: 50px">Notice Board</h1>
<marquee width="100%" direction="up" height="500px" scrollamount="5">
<dl align="center">
	<dt style="color: brown; font-size: 20px;">Admission Process.</dt>
	<dd>Admission Process is started for Academic Year 2021-22.</dd>
	<dd>Link for Admission Process is <a href="Admission_Form.php" style="color: blue;">Click Here</a></dd>
	
	<dt style="color: brown; font-size: 20px;">Ganesh Chaturthi</dt>
	<dd>Ganesh Chaturthi On 10September,2021 is held on School Hall.</dd>
	<dd>All the Students are informed that timmings are 7:30 to 10:30.</dd>
	<dd>Many Events are there so who ever wants to participate please inform to there Class Teacher.</dd>
	
	<dt style="color: brown; font-size: 20px;">Navratri Mahotsav</dt>
	<dd>On 10October,2021 we are going to celebrate Navratri Mahotsav.</dd>
	<dd>Navratri Mahotsav will held on School Ground and Timings are 5:00PM to 8:00PM.</dd>
</dl>
</marquee>
</table>
<?php
	include "footer.php";
?>