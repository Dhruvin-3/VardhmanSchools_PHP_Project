<?php
	include("connection.php");
	$id=$_REQUEST['id'];
	$q="Delete from feedback where id=$id";
	mysql_query($q);
?>
<script>
window.location="feedback.php";
</script>