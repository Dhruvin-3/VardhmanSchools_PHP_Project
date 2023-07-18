<?php include "header.php";?>
<!DOCTYPE html>
<html>

<head>
    <title>Admission inquiry</title>       
    <style type="text/css">
        #process_img{
          opacity: 0.7;
          position: fixed;
          text-align: center;
          top: 0;
          width: 80%;
          z-index: 1001;
          display: none;
          background: white;
          height: 100%;
        }
        #process_img img{
          position: relative;
          top: 40%;
        }
    </style>
</head>


<body class="home-page ">
	<h1 align="center">ADMISSION FORM</h1>
    <form method="POST" action="" accept-charset="UTF-8" autocomplete="off" align="center">
		<input name="_token" type="hidden" value="Dw1L7xo1PJAKCLA7J5xTQXBqZ1PJE7vqwxXn47G1">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="col-md-4">
                    <div class="form-group ">
                        <strong>Surname <span>*</span></strong>
                        <input placeholder="Enter Surname" class="form-control" name="surname" type="text">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group ">
                        <strong>Name <span>*</span></strong>
                        <input placeholder="Enter Name" class="form-control" name="name" type="text">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group ">
                        <strong>Father Name <span>*</span></strong>
                        <input placeholder="Enter Father Name" class="form-control" name="father_name" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="col-md-6">
                    <div class="form-group ">
                        <strong>Mobile No <span>*</span></strong>
                        <input placeholder="Enter Mobile No" class="form-control" name="contact" type="text">
                    </div>
                </div>
             
            
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Email <span>*</span></strong>
                        <input placeholder="Enter Email" class="form-control" name="email" type="email">
                    </div>
                </div>
		     </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="col-md-6">
                    <div class="form-group ">
                        <strong>Gender <span>*</span></strong>
                        <select class="form-control" name="gender">
							<option value="" selected="selected">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                        <strong>Category <span>*</span></strong>
                        <select class="form-control" name="category">
							<option value="" selected="selected">Select Category</option>
							<option value="Open">Open</option>
							<option value="SEBC">SEBC</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
						</select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Standard </strong>
                        <select class="form-control" name="standard">
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
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group ">
                        <strong>Percentage <span>*</span></strong>
                        <input placeholder="Enter Percentage" class="form-control" name="percentage" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="col-md-6">
                    <div class="form-group ">
                        <strong>Address <span>*</span></strong>
                        <textarea placeholder="Enter Address" class="form-control" rows="4" name="address" cols="50"></textarea>
                    </div>
                </div>
               
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success ">Submit</button>
                </div>
            </div>
            </form>
</body>

</html>
<?php include "footer.php"; ?> 
