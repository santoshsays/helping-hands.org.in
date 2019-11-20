<?php include('include/navbars.php'); 
include('database/dbconfig.php');
?>

<!-- -----Donations section---------  -->
<div class="donations">
		<div class="donations_background parallax-window" data-parallax="scroll" data-image-src="img/donation.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="donations_content">
						<div class="donation_title">
							<h1>Bless Others With Your Love and Gifts</h1>
						</div>
						<div class="donation_sub_title">
							<h4>Make Your Donation Today</h4>
						</div>
					</div>
				</div>
			
          		<!-- <div class="col-lg-6 col-md-6 mt-0 mt-md-5 d-flex"> -->
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="donation_details_container">
					
						<div class="donation_details">
						<!-- <h5 style="text-align:center">Make Your Donation Today</h5> -->
							<form action="instamojo/paydonation.php" method="POST" class="request-forms">
								<div class="form-groups">
									<label  class="label" for="purpose">Purpose</label>
									<select class="form-control" id="paying_purpose" name="paying_purpose"required>
										<option value="" selected disabled>Select Purpose of Donation</option>
										<option value="Health" name="health">Health</option>
										<option value="Education" name="education">Edcation</option>
										<option value="Food & Hunger" name="food&hunger">Food & Hunger</option>
										<option value="Disability" name="disability">Disability</option>
										<option value="Community" name="community">Community</option>
										<option value="Orphans" name="orphands">Orphans</option>
									</select>
								</div>
								<div class="form-groups">
									<label class="label">Amount</label><br/>
									<input type="text" name="paying_amount" class="form-control" placeholder="Your Amount Help Orphans" required>
								</div>
								<div class="form-groups">
									<label  class="label">Name</label><br/>
									<input type="text"name="payer_name" class="form-control" placeholder="Enter your full name " required>
								</div>
								<div class="form-groups">
									<label  class="label">Email</label><br/>
									<input type="text"name="payer_email" class="form-control" placeholder="Enter your email address" required>
								</div>
								<div class="form-groups">
									<label  class="label">Phone</label><br/>
									<input type="text"  name="payer_phone"class="form-control" placeholder="Enter your mobile number" optional>
								</div>
								<br/>
								<div class="form-groups">
									<button type="submit" name="donate_now_btn"  class="btn btn-danger py-2 px-6">Donate Now</button>
								</div>
	    					</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-------progress section-------------- -->
<section class="donate_progress_sec">
	<div class="container">
		<div class="wrappers row">
			<!-- <div class=""> -->
			<div class="col-lg-3 donate_body_sect">
				<img class="d_img"src="img/donation.png" >
				<!-- <i class="fa fa-code fa-2x"></i> -->
				<?php
				$query1 ="select SUM(d_amount) as total_amount from donation";
				$query1_run =mysqli_query($con,$query1);
				    if(mysqli_num_rows($query1_run)>0)
                    {
                        while($row= mysqli_fetch_assoc($query1_run))
                        {
							$totaldonation =$row['total_amount'];
                            ?>
				

				<h2 class="timer count-title count-number" data-to="<?php echo $totaldonation; ?>" data-speed="1500"></h2>
				<?php
						}
					}
					?>
				<p class="count-text ">Total Donations</p>
			</div>

			<div class="col-lg-3 donate_body_sect">
			<img class="d_img"src="img/olive.png" >
				<!-- <i class="fa fa-coffee fa-2x"></i> -->
				<?php
					$date  = date('Y-m');
					$query2 = "select SUM(d_amount) as this_month from donation WHERE  d_date LIKE '$date%'";
					$query2_run =mysqli_query($con,$query2);
				    if(mysqli_num_rows($query2_run)>0)
                    {
                        while($row= mysqli_fetch_assoc($query2_run))
                        {
							$this_month =$row['this_month'];
					
							?>
				<h2 class="timer count-title count-number" data-to="<?php echo $this_month;?>" data-speed="1500"></h2>
				<?php
						}
					}
					?>
				<p class="count-text ">Donation This Month</p>
			</div>

			<div class="col-lg-3 donate_body_sect">
			<img class="d_img"src="img/teamwork.png" >
				<!-- <i class="fa fa-lightbulb fa-2x"></i> -->
				<?php
				$query3 ="select SUM(funded_need) as total_fund from funds";
				$query3_run =mysqli_query($con,$query3);
				    if(mysqli_num_rows($query3_run)>0)
                    {
                        while($row= mysqli_fetch_assoc($query3_run))
                        {
							$fundeneeded =$row['total_fund'];
                            ?>
				<h2 class="timer count-title count-number" data-to="<?php echo $fundeneeded; ?>" data-speed="1500"></h2>
				<?php
						}
					}
					?>
				<p class="count-text ">Fund Needed</p>
			</div>

			<!-- <div class="counter col_fourth end">
				<i class="fa fa-bug fa-2x"></i>
				<h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
				<p class="count-text ">Total Volunteers</p>
			</div> -->
		
		</div>
	</div>
</section>

<!-- ================ Start Our Major Cause section ================= -->
<section class="our_major_cause">
		<div class="container">
			<div class="row justify-content-center section-title-wraps">
				<div class="col-lg-12">
					<h2>Why <span>Donate us ?</span></h2>
					<h6>Forget what you can get and see what you can give</h6>
				</div>
			</div>
				<div class="row">
				<div id="our-major-cause" class="owl-carousel">
					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/donation/d1.jpg" alt="Card image cap">
							</figure>
							<?php
							$query11 ="select funded_need  from funds where donation_type='Health'";
							$query11_run =mysqli_query($con,$query11);
								if(mysqli_num_rows($query11_run)>0)
								{
									while($row= mysqli_fetch_assoc($query11_run))
									{
										$health_tamt =$row['funded_need'];
									}
								}
							?>
							<?php
							$query12 ="select SUM(d_amount) as health_amount from donation where d_purpose='Health'";
							$query12_run =mysqli_query($con,$query12);
								if(mysqli_num_rows($query12_run)>0)
								{
									while($row= mysqli_fetch_assoc($query12_run))
									{
										$health_amt =$row['health_amount'];
									}
								}
							?>
							 <?php $health_per =($health_amt/$health_tamt)*100;	?>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<span>Funded &nbsp<?php echo $health_per;?>%</span>
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<span>Raised : Rs &nbsp<?php echo $health_amt;?></span> / Rs <?php echo $health_tamt; ?>
								</div>
								<h4 class="card-title text-center">Health</h4>
								<p class="card-text">We at helping hands believe that health is wealth and we raised fund for the betterment of the 
								 health of the oprhan Children.
								</p>
								<a href="#" class="main_btn2">donate here</a>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/donation/d02.jpg" alt="Card image cap">
							</figure>
							<?php
							$query13 ="select funded_need  from funds where donation_type='Education'";
							$query13_run =mysqli_query($con,$query13);
								if(mysqli_num_rows($query13_run)>0)
								{
									while($row= mysqli_fetch_assoc($query13_run))
									{
										$education_tamt =$row['funded_need'];
									}
								}
							?>
							<?php
							$query14 ="select SUM(d_amount) as education_amount from donation where d_purpose='Education'";
							$query14_run =mysqli_query($con,$query14);
								if(mysqli_num_rows($query14_run)>0)
								{
									while($row= mysqli_fetch_assoc($query14_run))
									{
										$education_amt =$row['education_amount'];
									}
								}
							?>
							 <?php $education_per =($education_amt/$education_tamt)*100;	?>

							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<span>Funded &nbsp <?php echo $education_per; ?>%</span>
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<span>Raised: Rs <?php echo $education_amt; ?></span> / Rs <?php echo $education_tamt; ?>
								</div>
								<h4 class="card-title text-center">Education</h4>
								<p class="card-text">As the education is most needed aspects of everyone life, we raise the fund for providing the 
								health facilities to the needy Children.
								</p>
								<a href="#" class="main_btn2">donate here</a>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/donation/d03.png" alt="Card image cap">
							</figure>
							<?php
							$query15 ="select funded_need  from funds where donation_type='Food & Hunger'";
							$query15_run =mysqli_query($con,$query15);
								if(mysqli_num_rows($query15_run)>0)
								{
									while($row= mysqli_fetch_assoc($query15_run))
									{
										$food_tamt =$row['funded_need'];
									}
								}
							?>
							<?php
							$query16 ="select SUM(d_amount) as food_amount from donation where d_purpose='Food & Hunger'";
							$query16_run =mysqli_query($con,$query16);
								if(mysqli_num_rows($query16_run)>0)
								{
									while($row= mysqli_fetch_assoc($query16_run))
									{
										$food_amt =$row['food_amount'];
									}
								}
							?>
							 <?php $food_per =($food_amt/$food_tamt)*100;	?>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<span>Funded <?php echo $food_per;?>%</span>
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<span>Raised: &nbsp Rs <?php echo $food_amt;?> </span> / Rs <?php  echo $food_tamt?> 
								</div>
								<h4 class="card-title text-center">Food & Hunger</h4>
								<p class="card-text">We pray god to make every stomach filled up & have faith on supprorting them raising funds for 
								 providing a food for the needy one 
								</p>
								<a href="#" class="main_btn2">donate here</a>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/donation/d04.jpg" alt="Card image cap">
							</figure>
							<?php
							$query17 ="select funded_need  from funds where donation_type='Disability'";
							$query17_run =mysqli_query($con,$query17);
								if(mysqli_num_rows($query17_run)>0)
								{
									while($row= mysqli_fetch_assoc($query17_run))
									{
										$disab_tamt =$row['funded_need'];
									}
								}
							?>
							<?php
							$query18 ="select SUM(d_amount) as disab_amount from donation where d_purpose='Disability'";
							$query18_run =mysqli_query($con,$query18);
								if(mysqli_num_rows($query18_run)>0)
								{
									while($row= mysqli_fetch_assoc($query18_run))
									{
										$disab_amt =$row['disab_amount'];
									}
								}
							?>
							 <?php $disab_per =($disab_amt/$disab_tamt)*100;	?>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<span>Funded <?php echo $disab_per;?>%</span>
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<span>Raised: &nbsp <?php echo $disab_amt; ?></span> / Rs <?php  echo $disab_tamt;?>
								</div>
								<h4 class="card-title text-center">Disability</h4>
								<p class="card-text">Helping one who is not born as normal as giving support to feel like them they are also having
								same life as us & we raise fund for them.
								</p>
								<a href="#" class="main_btn2">donate here</a>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/donation/d05.jpg" alt="Card image cap">
							</figure>
							<?php
							$query19 ="select funded_need  from funds where donation_type='Community'";
							$query19_run =mysqli_query($con,$query19);
								if(mysqli_num_rows($query19_run)>0)
								{
									while($row= mysqli_fetch_assoc($query19_run))
									{
										$com_tamt =$row['funded_need'];
									}
								}
							?>
							<?php
							$query20 ="select SUM(d_amount) as com_amount from donation where d_purpose='Community'";
							$query20_run =mysqli_query($con,$query20);
								if(mysqli_num_rows($query20_run)>0)
								{
									while($row= mysqli_fetch_assoc($query20_run))
									{
										$com_amt =$row['com_amount'];
									}
								}
							?>
							 <?php $com_per =($com_amt/$com_tamt)*100;	?>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<span>Funded <?php echo $com_per;?>%</span>
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<span>Raised: &nbsp Rs <?php echo $com_amt?></span> / Rs <?php echo $com_tamt;?>
								</div>
								<h4 class="card-title text-center">Community</h4>
								<p class="card-text">We at helping hands believe that we can make stability in the community by bringing awareness in the 
								people & we make campgain for making it success. 
								</p>
								<a href="#" class="main_btn2">donate here</a>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<figure>
							<?php
							$query21 ="select funded_need  from funds where donation_type='Orphans'";
							$query21_run =mysqli_query($con,$query21);
								if(mysqli_num_rows($query21_run)>0)
								{
									while($row= mysqli_fetch_assoc($query21_run))
									{
										$orp_tamt =$row['funded_need'];
									}
								}
							?>
							<?php
							$query22 ="select SUM(d_amount) as orp_amount from donation where d_purpose='Orphans'";
							$query22_run =mysqli_query($con,$query22);
								if(mysqli_num_rows($query22_run)>0)
								{
									while($row= mysqli_fetch_assoc($query22_run))
									{
										$orp_amt =$row['orp_amount'];
									}
								}
							?>
							 <?php $orp_per =($orp_amt/$orp_tamt)*100;	?>
								<img class="card-img-top img-fluid" src="img/donation/d07.jpg" alt="Card image cap">
							</figure>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
									<span>Funded <?php echo $orp_per;?>%</span>
								</div>
							</div>
							<div class="card_inner_body">
								<div class="card-body-top">
									<span>Raised: &nbsp Rs<?php echo $orp_amt;?></span> / Rs <?php echo $orp_tamt;?>
								</div>
								<h4 class="card-title text-center">Orphans</h4>
								<p class="card-text">Helping hands is established with main goal to support the  needy children  & give them all the basic 
								needs what they are expecting as normala children.
								</p>
								<a href="#" class="main_btn2">donate here</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Ens Our Major Cause section =================-->

<!-------------- Footer Section------------->
<?php include('include/footer.php'); ?>
<!----------------Javascript link------------>
<script src="vendors/jquery-3.4.1.min.js"></script>
<script src="vendors/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<!--------------Typed JS Link----------------->
<script src="js/jquery.stellar.min.js"></script>
<script src="vendors/jquery.parallax.js"></script>
<script src="vendors/parallax.js"></script>
<script src="js/parallax.min.js"></script>

<!-------  Slick & Carusel Js   ------>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/customs.js"></script>
<script src="js/scripts.js"></script>
<!----------------Smooth Scroll Js-------------->
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
<!-----------------AOS JS Library-------------->
<script src="js/aos.js"></script>
   <script>
      AOS.init();
</script>

</body>
</html>
