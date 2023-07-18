<?php
	include("connection.php");
	$id=$_REQUEST['id'];
	$q="Delete from shipping where id=$id";
	mysql_query($q);
?>
<script>
window.location="shipping.php";
</script>