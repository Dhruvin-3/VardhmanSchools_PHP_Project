<?php
  include"Config.php";
  $pnm=$_POST['name'];
  $exp=$_POST['exp'];
  $desg=$_POST['designation'];
  $qual=$_POST['qualification'];
  
  
  $path="../images/".$_FILES['photo']['name'];
  $path1=$_FILES['photo']['name'];
  move_uploaded_file($_FILES['photo']['tmp_name'],$path);
  $qry="insert into faculty(name,designation,qualification,experience,photo) values('$pnm','$desg','$qual','$exp','$path1')";
  
  echo "insert into faculty(name,designation,qualification,experience,photo) values('$pnm','$desg','$qual','$exp','$path1')";
  
  $res=mysqli_query($con,$qry);
  if($res)
  {
     $_SESSION['msg']="Record Added Successfully...";
	 echo"<script>window.location='product.php';</script>";
  }
  else
  {
     $errormsg="Something went wrong,Try again";
	 echo"<script type='text/javascript'>alert('$errormsg');</script>";
	 }
?>	 	 