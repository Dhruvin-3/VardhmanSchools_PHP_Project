<?php
	session_start();
	include "config.php";
	$count=0;
	if(isset($_POST['productdel']))
	{
		foreach($_POST['productdel'] as $pid)
		{
			$count++;
			mysql_query("delete from product where pid='".$pid."'");
		}
	}