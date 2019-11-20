<?php
include('config.php');
include('../database/dbconfig.php');
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="icon" href="../img/logo.jpeg" type="image/x-icon" />
	<title>Helping Hands</title>
	<!-- GooglFonts link -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:600&display=swap" rel="stylesheet">
	<!-- FontAwesome link -->
	<link rel="stylesheet" href="../vendors/font-awesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../material-design-iconic-font.min.css">
	<!-- Bootstrap link -->
	<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../vendors/bootstrap/css/bootstrap.min.css">
	<!-- Typed & Slick css link-->
	<link rel="stylesheet" href="../vendors/typedjs/typed.css">
	<!--swipper.css Link-->
	<link rel="stylesheet" href="../css/swiper.min.css">
	<!----CSS Carousel Link------>
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<!----slick css Link------>
	<link rel="stylesheet" href="../css/slick.css">
	<!----AOS css Link------>
	<link rel="stylesheet" href="../css/aos.css">
	<link rel="stylesheet" href="../css/animate.css">
	<!----CSS Link------>
	
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../scss/styles.css">
</head>
<body>
<!---------------Navbar Section --------------->
<section id="nav-bar">
 	<nav class="navbar navbar-expand-lg navbar-light bg-white">
  		<a class="navbar-brand" href="index.php"><img src="../img/hands-helping-solid.svg"/><b>Helping <span>Hands</span></b></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span></button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="../index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../index.php#about">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../index.php#services">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../index.php#events">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../index.php#whytous">Teams</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../index.php#contact">Contact us</a>
				</li>
			</ul>
		
				<button id="donateus" class="btn btn-primary" onclick="../donate.php">Donate Now </button>
				<button id="bevolunter" class="btn btn-danger" onclick="location.href='../bevolunter.php';">Be Volunter</button>
	
  		</div>
 	</nav>
</section>

<div class="container">
		<div class="bg-boxshadow mt-100 pt-50" >
			
			<h1 class="text-center"><i class="fas fa-check-circle fa-2x pb-25" ></i></h1>
			<h1 class="text-center" style="font-size:70px; letter-spacing:2px;">THANK YOU !</h1>
			
			<p class="text-info text-center">Please check your email for information.<span class="text-danger text-center"><strong>We wish you great day !</strong> </span></p>
			
			<br/><br/>
		</div>
		
		
	</div>
</div>
    
 <?php
include('Instamojo.php');
$api = new Instamojo\Instamojo($api_key, $api_secret, $inst_url);

$payid = $_GET["payment_request_id"];

try {
    $response = $api->paymentRequestStatus($payid);

	$payer_name=$response['payments'][0]['buyer_name'];
	$payer_email=$response['payments'][0]['buyer_email'];
	$payer_phone=$response['payments'][0]['buyer_phone'];
	$payer_amount=$response['amount'];
	$paying_purpose=$response['purpose'];
	$paying_id=$response['payments'][0]['payment_id'];
	$paying_date= date('Y-m-d H:i:s');
	$paying_status=$response['status'];

    // echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    // echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
	// echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
	// echo "<h4>Payment Email: " . $response['payments'][0]['buyer_phone'] . "</h4>" ;
    // echo "<h4>Purpose: " . $response['purpose'] . "</h4>" ;
    // echo "<h4>Payment Status: " . $response['status'] . "</h4>" ;
    // echo "<h4>Payment Amount: " . $response['amount'] . " ".$response['payments'][0]['currency']."</h4>" ;

	$query = "INSERT INTO donation (d_name,d_email,d_phone,d_amount,d_purpose,d_payid,d_date,d_status)
	VALUES ('$payer_name','$payer_email','$payer_phone','$payer_amount','$paying_purpose','$paying_id','$paying_date','$paying_status')";
   	$query_run = mysqli_query($con, $query);

	   $messages="Welcome to Helping Hands"."<br/>"."Hello".$payer_name."<br/>"."Thank You for your Love & support"."<br/>"."We Wish Great Day ahead !";
	   $url="https://www.way2sms.com/api/v1/sendCampaign";
	   $message = urlencode($messages);// urlencode your message
	   $curl = curl_init();
	   curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
	   curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=J48OEDLRQ1OL9NEDXVE3HQL6EVEFHJFL&secret=R4FBF40DSLJUQIX8&usetype=stage&phone=$payer_phone&senderid=sayhellotohelpinghands@gmail.com&message=$message");// post data
	   
	   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	   curl_setopt($curl, CURLOPT_URL, $url);
	   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	   $result = curl_exec($curl);
	   curl_close($curl);

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>
 <!----------------Javascript link------------>
<script src="../vendors/jquery-3.4.1.min.js"></script>
<script src="../vendors/popper.min.js"></script>
<script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
<!--------------Typed JS Link----------------->
<script src="../js/jquery.stellar.min.js"></script>
<script src="../vendors/jquery.parallax.js"></script>
<script src="../vendors/parallax.js"></script>
<script src="../js/parallax.min.js"></script>

<!-------  Slick & Carusel Js   ------>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../wow.min.js"></script>
<script src="../js/customs.js"></script>
<!----------------Smooth Scroll Js-------------->
<script src="../js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
<!-----------------AOS JS Library-------------->
<script src="../js/aos.js"></script>
   <script>
      AOS.init();
</script>

</body>
</html>