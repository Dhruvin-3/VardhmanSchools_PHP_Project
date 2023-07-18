<?php
include"header.php";
?>
<style type="text/css">
.button{
   background-color:#FF0000;
   border:none;
   color:white;
   padding:8px 15px;
   text-align:center;
   text-decoration:none;
   display:inline-block;
   font-size:14px;
}
</style>
<form action="add_product_insert.php" method="post" enctype="multipart/form-data">
<table>
<tr>
  <th><h2>ADD Faculty</h2></th>
</tr>
<tr><td><br></td></tr>
<tr>
   <td>Select Experience:</td>
   <td><select name="exp" required>
     <?php
	   	include"Config.php";
	   	$qry="Select*from Faculty";
	   	$res=mysqli_query($con,$qry);
	   	while($row=mysqli_fetch_array($res))     
	   	{
	      echo"<option value=$row[0]>$row[4]</option>";
		}
		?>
		</select></td>
</tr>
<tr><td><br></td></tr>
<tr>
   <td>Enter Name:</td>
   <td><input type="text" name="name" pattern="[A-Za-z\s]{2,30}" required/></td>
</tr>
<tr><td><br></td></tr>
<tr>
   <td>Enter Designation:</td>
   <td><input type="text" name="designation"pattern="[A-Za-z\s]{2,30}" required/></td>
</tr>
<tr><td><br></td></tr>
<tr>
	
</tr>

<tr>
   <td>Enter Qualification:</td>
   <td><input type="text" name="qualification" pattern="[A-Za-z\s]{2,30}" required/></td>
</tr>
<tr><td><br></td></tr>

<tr>
   <td>Select Image:</td>
   <td><input type="file" name="photo"required/></td>
</tr>
<tr><td><br></td></tr>





<tr>
  <td><input type="submit" name="submit"class="button"value="Add Record"/></td>
  <td><input type="reset" name="reset" class="button" value="Cencel"/></td>
</tr>
</table>
</form>
<?php
 include"footer.php";
?>          		       