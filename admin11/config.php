<?php
	$con=mysql_connect("localhost","root","")or die("could not connect localhost");
	$db=mysql_select_db("tour_db",$con)or die("could not connect database");
?>