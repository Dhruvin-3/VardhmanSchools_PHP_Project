<?php
	include("connection.php");
	$id=$_REQUEST['cat_id'];
	$q="Delete from category where cat_id=$id";
	mysql_query($q);
?>
<script>
window.location="category.php";
</script>