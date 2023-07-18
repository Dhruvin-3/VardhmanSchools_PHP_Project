<?php
	include("connection.php");
	$id=$_REQUEST['id'];
	$q="Delete from register where id=$id";
	mysql_query($q);
?>
<script>
window.location="customer.php";
</script>