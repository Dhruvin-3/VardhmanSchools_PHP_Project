<?php
	include("connection.php");
	$id=$_REQUEST['pid'];
	$q="Delete from product where pid=$id";
	mysql_query($q);
?>
<script>
window.location="product.php";
</script>