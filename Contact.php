<?php
	session_start();
	include "header.php";
?>
<form action="Contact_process.php" method="post">
	<section class="inner_banner">
	  <div class="container">
	      <div class="row">
		      <div class="col-12">
			     <div class="full">
				     <h3>Contact us</h3>
				 </div>
			  </div>
		  </div>
	  </div>
	</section>
	
	<!-- end section -->
   
	<!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-12">
				    <div class="full float-right_img">
                        <img src="images/img10.png" alt="#">
                    </div>
                 </div>
				 <div class="col-lg-4 col-md-4 col-sm-12">
				    <div class="contact_form">
					    <form action="contact.html">
						   <fieldset>
						       <div class="full field">
							      <input type="text" placeholder="Your Name" name="txtname" />
							   </div>
							   <div class="full field">
							      <input type="email" placeholder="Email Address" name="email" />
							   </div>
							   <div class="full field">
							      <input type="phn" placeholder="Phone Number" name="phno" />
							   </div>
							   <div class="full field">
							      <textarea placeholder="Massage" name="msg"></textarea>
							   </div>
							   <div class="full field">
							      <div class="center"><button>Send</button></div>
							   </div>
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->
	</form>
<?php
	include "footer.php";
?>