<?php 
	session_start();
	include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admission inquiry</title>       
    <style type="text/css">
       .button
	{
		background-color:#DC3D3D;
		border:none;
		color:white;
		padding:15px 32px;
		text-align:center;
		text-decoration:none;
		display:inline-block;
		font-size:14px;
	}
    </style>
<link rel="stylesheet" href="">
<script src="">
</script>
<script>
$(function())
{
  $("datepicker").datepicker({
								changeMonth:true,
								changeYear:true
							});
	});
</script>
</head>


<body>
	<h1 align="center" style="color: red; font-size: 50px;">ADMISSION FORM</h1>
    <form method="post" action="Admission_process.php">
		<table align="center">
			<tr>
				<th>Surname: </th>
				<td><input type="text" placeholder="Enter Your Surname" name="surname" pattern="[A-Za-z\s]{2,30}" title="Only letter for name" required/>
				</td>
			</tr>
			
			<tr>
				<th>Name: </th>
				<td><input type="text" placeholder="Enter Your Name" name="name" pattern="[A-Za-z\s]{2,30}" title="Only letter for name" required/></td>
			</tr>
			
			<tr>
				<th>Father's Name: </th>
				<td><input type="text" placeholder="Enter Father's Name" name="father_name" pattern="[A-Za-z\s]{2,30}" title="Only letter for name" required/>
				</td>
			</tr>
			
			<tr>
				<th>Mobile No.: </th>
				<td><input type="text" placeholder="Enter Mobile No."name="contact" pattern="([6-9]{1})+([0-9]{9})" title="Only Number" maxlength="10" required>
				</td>
			</tr>
			
			<tr>
				<th>E-mail: </th>
				<td><input type="email" placeholder="Enter E-mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter proper Email ID" required>
				</td>
			</tr>
			<tr>
				<th>Gender: </th>
				<td>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr>
			<tr>
				<th>Category: </th>
				<td>
					<select name="category">
						<option value="" selected="selected">Select Category</option>
						<option value="Open">Open</option>
						<option value="SEBC">SEBC</option>
						<option value="SC">SC</option>
						<option value="ST">ST</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Standard: </th>
				<td>
					<select name="standard">
                    	<option value="">Select Standard</option>
                                	<option value="12th-Sci">12th Science </option>
                                    <option value="12th-Com">12th Commerce</option>
									<option value="11th-Sci">11th Science</option>
                                    <option value="11th-Com">11th Commerce</option>
                                    <option value="10th">10th</option>
									<option value="9th">9th</option>
									<option value="8th">8th</option>	 
									<option value="7th">7th</option>	 
									<option value="6th">6th</option>	
                                    <option value="5th">5th</option>                                                         <option value="4th">4th</option>                
                                    <option value="3th">3th</option>
									<option value="2th">2th</option>
									<option value="1th">1th</option>
                    </select>
				</td>
			</tr>
			<tr>
				<th>Percentage: </th>
				<td><input type="text" name="percentage" placeholder="Enter Percentage"></td>
			</tr>
			<tr>
				<th>Address: </th>
				<td><textarea placeholder="Enter Address" rows="5" name="address" cols="50"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" class="button" value="Submit"></td>
				<td><input type="reset" class="button" value="Reset"</td>
			</tr>
		</table>
	</form>
	</body>
</html>
<?php
	include "footer2.php";
?>