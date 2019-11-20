<?php
include('include/navbar.php');
include('database/dbconfig.php');
?>
<!------------Main Panel Loading section------>
<section class="mainpanel">  <!--style- in --main.css------>
  	<div class="container">
    	<div class="text-center">
      		<div row>
        		<div col-12>
          			<p class="heading text-uppercase">Small Effort Make Big Change</p>
          			<h1 class="display-sm-4 display-lg-3 mb-3">We raise funds for
						<span class="display-typing"></span>
						<span class="typed-cursor">|</span>
          			</h1>
					<button id="donatenow" class="btn btn-primary" onclick="location.href = 'donate.php'";>Donate Now</button>
					<button id="whyus" class="btn btn-outline-info" onclick="document.getElementById('whytous').scrollIntoView();">
						<a href="#whytous"> Why us</a>
					</button>
        		</div>
      		</div>
    	</div>
	</div>
</section>

<!----------------------Reason for Donation-------->
<!-- <section class="cause_slider">
  	<div class="row align-items-center">
    	<div class="col-lg-12">
      		<div class="client_logo owl-carousel">
        		<div class="single_client_logo">
          			<img class="cause_img" src="img/imgslider/1.jpg">
					
        		</div>
				<div class="single_client_logo">
        			<img class="cause_img"src="img/imgslider/2.jpg">
      			</div>
    			<div class="single_client_logo">
          			<img class="cause_img"src="img/imgslider/3.jpg">
        		</div>
    			<div class="single_client_logo">
            		<img class="cause_img"src="img/imgslider/4.jpg">
          		</div>
          		<div class="single_client_logo">
              		<img class="cause_img"src="img/imgslider/5.jpg">
            	</div>
            	<div class="single_client_logo">
                	<img class="cause_img"src="img/imgslider/6.png">
              	</div>
              	<div class="single_client_logo">
                  	<img class="cause_img"src="img/imgslider/7.jpg">
                </div>
                <div class="single_client_logo">
                    <img class="cause_img"src="img/imgslider/8.jpg">
                </div>
			</div>
		</div>
	</div>
</section> -->
<!------ Upcoming Events section -->
<div class=" py-2 upcoming-events">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8 col-xs-8">
            
            <?php
            $query2="SELECT * FROM event where e_id=(SELECT MAX(e_id) FROM event)";
             $query2_run=mysqli_query($con,$query2);
              if(mysqli_num_rows($query2_run)>0)
              {
                while($row= mysqli_fetch_assoc($query2_run))
                {
                    $d_date=$row['e_date'];
                    $dayOfWeek = date("d", strtotime($d_date));
                    $month = date("M", strtotime($d_date));
		        
                if($d_date == date("Y-m-d"))
                {
                    ?>
                    <span class="caption  mb-3 px-4"><a style="color:white;" href="index.php#events">Ongoing Events</a></span>
                    <?php
                }
                else
                { 
                    ?>
                    <span class="caption  mb-3 px-4"><a style="color:white;" href="index.php#events">Upcoming Events</a></span>
                    <?php
                }
               ?>
                 <div class="row">
                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                    <div class="event_days"><?php echo $dayOfWeek; ?></div>
                    <div class="event_months"><?php echo $month;?></div>
                </div>
                <div class="event_contents">
                    <div class="event_titles"><h3 class="text-white"><?php echo $row['e_title']?></h3></div>
                        <ul class="event_rows">
                            <li>
                                <div class="event_icon"><img src="img/events/calendar.png" alt=""></div>
                                <span><?php echo $row['e_start_time']?> -<?php echo $row['e_end_time'] ?></span>
                            </li>
                            <li>
                                <div class="event_icon"><img src="img/events/location.png" alt=""></div>
                                <span><?php echo $row['e_location'];?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                <?php
                }
              }
            ?>
             
            <div class="col-md-4 col-xs-4">
            <?php
            if($d_date == date("Y-m-d"))
            {
                ?>
                <span class="captions"style="font-size:24px;">Our Event Started</span>
              
            <?php
            }
            else
            {
                ?>
                  <span class="captions">Our Event will start in</span>
                  <div id="date-countdown"></div>  
            <?php
            }
            ?>
               
                
            </div>
        </div>
    </div>
</div>

<!-----------------About us section---------->
<section class="about-us-countdown-area section-padding-100-0" id="about">
    <div class="container">
        <div class="row align-items-center">
             <!-- About Content -->
            <div class="col-12 col-md-6">
                <div class="about-content-text mb-80">
					<h2 class ="about-title text-center text-white">who <span>we are ?</span></h2>
					<p data-aos="fade-up" data-aos-offset="200" data-aos-delay="10"data-aos-duration="1000"
					data-aos-easing="ease-in-out"><span><strong>Helping Hands</strong></span> is a non profit organization, which works for
					welfare of orphans. We make sure  every single child should get all the basic needs
					and get grown up properly.<br><br>
					The Helping Hand Foundation is a fund raising entity & works in conjunction
					with Tulunads Model Karnataka. It was started by the students of SDIT with
					objective to provide accommodation and care to every single orphan child around
					India.</p>
		        </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="about-thumb mb-80" data-aos="fade-up" data-aos-offset="200" data-aos-delay="10"data-aos-duration="1000"
					data-aos-easing="ease-in-out">
                    <img src="img/aboutus.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="about-footer">
		<div class ="container text-center">
      		<blockquote data-aos="zoom-in" data-aos-offset="200"data-aos-duration="1000"data-aos-easing="ease-in-out"><span>"To every child :</span> I dream of world where you can laugh,<br>
       		 dance, sing, learn, live in peace and be happy<span>"</span>
      		</blockquote>
      		<p data-aos="fade-up"  data-aos-duration="1000"  data-aos-easing="ease-in-out"><span>--Malala Yousafzai--</span></p>
        </div>
	</div>
</section>
<!---------------Our Services Section-------->
<section class="our_major_cause section_gap_custom" id="services">
	<div class="container">
		<h2 class ="services-title">what<span> we do ?</span></h2>
			<div class="row">
			
				<div class="col-lg-4" >
					<div class="card" data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1500"data-aos-easing="ease-in-out">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/services/s1.png" alt="Card image cap">
							</figure>
							<div class="card_inner_body text-center">
								<h4 class="card-title">Meet Up</h4><br/>
								<p class="card-text">We make a meetup where our team visit
								the orphans centre around the city to love and support them.
								</p>
								<!-- <button data-aos="zoom-in-up" data-aos-offset="100" data-aos-delay="100" data-aos-duration="1500"data-aos-easing="ease-out" id="donateus"
								class="btn btn-primary" data-toggle="modal" data-target="#bevoluntertoday">Meet Up</button> -->
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-lg-4">
					<div class="card" data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1500"data-aos-easing="ease-in-out">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/services/s2.jpg" alt="Card image cap">
							</figure>
							<div class="card_inner_body text-center">
								<h4 class="card-title">Fund Raising</h4><br/>
								<p class="card-text">We have aim to make each and evey child happy
								by the help of fund we raised from your small effort.
								</p>
								<!-- <button data-aos="zoom-in-up" data-aos-offset="100" data-aos-delay="100"data-aos-duration="1500"data-aos-easing="ease-out" id="donateus"
								class="btn btn-danger" onclick="location.href = 'donate.php'";>Donate Now </button> -->
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card" data-aos="fade-up" data-aos-offset="200" data-aos-delay="100" data-aos-duration="1500"data-aos-easing="ease-in-out">
						<div class="card-body">
							<figure>
								<img class="card-img-top img-fluid" src="img/services/s3.png" alt="Card image cap">
							</figure>
							<div class="card_inner_body text-center">
								<h4 class="card-title">Campaign</h4><br/>
								<p class="card-text">We make awareness Campaign for orphan to create a platform
								where they learn,live in peace and be happy.
								</p>
								<!-- <button data-aos="zoom-in-up" data-aos-offset="100" data-aos-delay="100" data-aos-duration="1500"data-aos-easing="ease-out" id="donateus"
								class="btn btn-primary" data-toggle="modal" data-target="#bevoluntertoday">Campaign</button> -->
							</div>
						</div>
					</div>
				</div>			
			</div>
	</div>
</section>
<!--   --- ----- our events sections ----->
<?php
      $query="SELECT * FROM event";
      $query_run=mysqli_query($con,$query);
    ?>
<section  class="events"id="events">
	<div class="container">
		<header class="text-center w-md-50 mx-auto mb-8">
			<h2 class="events-title">See <span>Our Events</span></h2>
			<h6 class="events-subtitle">Event Held and Scheduled By us.</h6>	
		</header>
		
		<div class="row">
		
		<?php
              if(mysqli_num_rows($query_run)>0)
              {
                while($row= mysqli_fetch_assoc($query_run))
                {
					?>
			<div class="events_item col-lg-4">
				<div class="events_item_image"><?php echo '<img src="uploads/events/'.$row['e_image'].'" width="100%;">' ?></div>
				<div class="events_item_content d-flex flex-row align-items-start justfy-content-start">
					<div class="event_date d-flex flex-column align-items-center justify-content-center">
			    	<?php
                        $d_date=$row['e_date'];
                        $dayOfWeek = date("d", strtotime($d_date));
                        $month = date("M", strtotime($d_date));
					?>
					    <div class="event_day"><?php echo $dayOfWeek; ?></div>
					    <div class="event_month"><?php echo $month;?></div>
					</div>
					<div class="event_content">
						<div class="event_title"><a href="#"><?php echo $row['e_title']; ?></a></div>
						<ul class="event_row">
							<li>
								<div class="event_icon"><img src="img/events/calendar.png" alt=""></div>
								<span><?php echo $row['e_start_time']; ?>-<?php echo $row['e_end_time']; ?></span>
							</li>
							<li>
								<div class="event_icon"><img src="img/events/location.png" alt=""></div>
								<span><?php echo $row['e_location']; ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<?php
				}
			}
				?>
		</div>
		
	</div>
</section>
<!-- ----------------Why choose us ?--------->
<section id="whytous">
    <div class="whywe">
      	<div class="container">
        	<header class="text-center w-md-50 mx-auto mb-8">
				<h2 class="whyus-title">why <span>choose us ?</span></h2>
				<p class="whyus-sub-title">"Helping <strong>Hands</strong> are better then praying lips"</p>
        	</header>
        	<div class="row text-center">
          		<div class="col-lg-4 mb-5 mb-lg-0" id="whyushov1">
            		<div class="display-4 text-primary mb-2">
						<i class="fab fa-grav"></i>
            		</div>
            		<h4 class="h5">Best Service</h4>
            		<p>We at helping hands believe in our service to needy children as duty .<br><br></p>
          		</div>

				<div class="col-lg-4 mb-5 mb-lg-0" id="whyushov2">
					<div class="display-4 text-primary mb-2">
						<i class="fab fa-connectdevelop"></i>
					</div>
					<h4 class="h5">Creative Ideas</h4>
					<p>We always come up with creative ideas to help your oprhans grow.<br><br></p>
				</div>

				<div class="col-lg-4 mb-5 mb-lg-0" id="whyushov3">
					<div class="display-4 text-primary mb-2">
						<i class="fas fa-cubes"></i>
					</div>
					<h4 class="h5">Enthusiastic</h4>
					<p>We love to help all the children that have problems in the world.<br><br></p>
				</div>
        	</div>
      	</div>
    </div>
</section>

<!------------ team section ---------------------->
<?php
      $querys="SELECT * FROM teams";
      $query_runs=mysqli_query($con,$querys);
    ?>
<section id="team">
    <section class="team-page-section">
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><h2>See <span style="color:crimson;">Our Team</span></h2></div>
                <div class="separator"><span></span></div><br/>
                <h5>Meet People with Helping Nature</h5>
            </div>

            <div class="row clearfix">
                <?php
                    if(mysqli_num_rows($query_runs)>0)
                    {
                        while($row= mysqli_fetch_assoc($query_runs))
                        {
                            ?>
                            <!-- Team Block -->
                            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <ul class="social-icons">
                                    
                                        <li><a href="<?php echo $row['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $row['instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $row['whatsaap']; ?>"><i class="fab fa-whatsapp"></i></a></li>

                                    
                                    </ul>
                                    <div class="image">
                                        <a href="#"><?php echo '<img src="uploads/teams/'.$row['image'].'">' ?></a>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="#"><?php echo $row['names']; ?></a></h3>
                                        <div class="designation"><?php echo $row['designation']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</section>

<!----------------Testimonials section------->
<section class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
					<div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
						<header class="text-center w-md-50 mx-auto mb-8">
							<h2 class="testimonial-title text-white">See <span>our Testimonials </span></h2>
							<p class="testimonial-sub-title text-white">"Forget what you can get and see what you can give"</p>
						</header>
                    </div>
                </div>
            </div>
			<!-- Our client area -->
                <div class="col-12">
                    <div class="our-client-area mt-100 wow fadeInUp" data-wow-delay="300ms">
                        <!-- client Slider -->
                        <div class="client-area owl-carousel">
                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>I believe there are people who have dreams but don't have support to fulfil them.
										In helping hands we understand the needs of orphans. I feel very much excited & happy
										by putting my little effort towards those needy one
									</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="img/testimonials/santosh.jpg" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Santosh Sah</h6>
                                            <p>Event Co-ordinator</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>

                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>I believe there are people who have dreams but don't have support to fulfil them.
										In heling hands we understand the needs of orphans. I feel very much excited & happy
										by putting my little effort towards those needy one
									</p>
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="img/testimonials/anvith.jpg" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Aniveth kateel</h6>
                                            <p>Event organizer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>
							
                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>There are people who have dreams but don't have support to fulfil them.
										In helping hands we understand the needs of orphans. I feel very much excited & happy
										by putting my little effort towards those needy one
									
									</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="img/testimonials/ali1.jpg" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Ali </h6>
                                            <p>Team Members</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>


							<!-- Single client Slider -->
							<div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="img/testimonials/15.jpg" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Pooja Bangera</h6>
                                            <p>Marketting Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
		</div>
</section>
<!------------- give donation & be volunter section ------>
<section class="experience_donation section_gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-12">
					<h1>Together We Can !</h1>
					<p>Forget what you can get and see what you can give</p>
					<a href="donate.php" class="main_btn2 mr-30 text-decoration-none">Make Donation Now</a>
					<a  href="bevolunter.php"class="main_btn text-decoration-none">Be  Volunters  Today</a>
				</div>
			</div>
		</div>
</section>

 <!------------ Contact us section  ------------------>
<section class="contact-our-area section-padding-100-0" id ="contact">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
						<header class="text-center w-md-50 mx-auto mb-8">
							<h2 class="contact-title text-white">Got a <span>Question?</span></h2>
							<p class="contact-sub-title text-white">Leave your message, We respond you back.</p>
        				</header>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Address:</p>
                            <h6>Kenjar Mangalore</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Phone:</p>
                            <h6>+91-886920664</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>sayhellotohelpinghands@gmail.com</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.helpinghands.rf.gd</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="sendmessage.php" method="POST" id="main_contact_form">
							    <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="m_name"  placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="m_email"  placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="m_subject"  placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="m_phone"  placeholder="Your Number" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="m_message" class="form-control mb-30" cols="30" rows="6" placeholder="Your Message *" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12" id="contact-submit-btn">
                                            <button type="submit"  name="send_user_msg_btn"class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php 
include('include/footer.php');
include('include/script.php');?>
