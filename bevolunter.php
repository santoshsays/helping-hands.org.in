<?php
include('include/navbars.php'); ?>
<!--  register volunter section  -->
<link rel="stylesheet" href="css/register.css">
<div class="donations">
		<div class="donations_background parallax-window" data-parallax="scroll" data-image-src="img/donation.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
			
          		<!-- <div class="col-lg-6 col-md-6 mt-0 mt-md-5 d-flex"> -->
				<div class="col-lg-5">
					<div class="donation_details_container">
					
						<div class="donation_details">
						<h5 style="text-align:center">Be Volunteer Today</h5>
							<form action="register_volunter.php" method="POST" enctype="multipart/form-data" class="request-forms">
								
								<div class="form-groups">
									<!-- <label class="label">Amount</label><br/> -->
									<input type="text"  name="reg_first" class="form-control" placeholder="Full Name" required><br/>
								</div>
								<div class="form-groups">
								 <!-- pattern="/^[a-zA-Z0-9.!#$%&amp;'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" -->
									<!-- <label  class="label">Name</label><br/> -->
									<input type="email"  name="reg_email" class="form-control" placeholder="Email " required><br/>
								</div>
								
								<div class="form-groups">
									<!-- <label  class="label">Message</label><br/> -->
									<input type="tel"  name="reg_mobile"class="form-control" placeholder="Mobile No" required><br/>
                                </div>
                                <div class="form-groups">
									<!-- <label  class="label">Message</label><br/> -->
									<input type="text"  name="reg_address"class="form-control" placeholder="Address" required><br/>
                                </div>
                                <div class="form-groups">
									<!-- <label  class="label">File</label><br/> -->
									<input type="file" name="reg_images"class="form-control" id="custom-file-input" required><br/>
								</div>
				
								<div class="form-groups">
									<button type="submit" name="bevolunter_btn"  value="submit" class="btn btn-danger py-2 px-6">Register Now</button>
								</div>
	    					</form>
						</div>
					</div>
                </div>
                
                <div class="col-lg-7">
					<div class="donations_content">
						<div class="donation_title">
							<h1>We can help to save the world</h1>
						</div>
						<div class="donation_sub_title">
							<h4>Be Volunteer Today</h4>
						</div>
					</div>
				</div>
			
			</div>
		</div>
</div>
      
<?php
include('include/footer.php');
include('include/script.php');
?>
