<?php
	include("connection.php");
	$id=$_REQUEST['id'];
	$q="Delete from payment where id=$id";
	mysql_query($q);
?>
<script>
window.location="payment.php";
</script>