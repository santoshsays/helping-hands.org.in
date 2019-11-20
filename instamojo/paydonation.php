<?php
session_start();
include('Instamojo.php');
include('config.php');
?>
<!-- ---- Payment Request section--- -->
<?php
if(isset($_POST['donate_now_btn']))
{	$paying_purpose=$_POST['paying_purpose'];
	$paying_amount = $_POST['paying_amount'];
	$payer_name = $_POST['payer_name'];
	$payer_email=$_POST['payer_email'];
	$payer_phone = $_POST['payer_phone'];

	$_SESSION['payer_name'] =$pname;

	$api = new Instamojo\Instamojo($api_key,$api_secret,$inst_url);
	
	try {
		$response = $api->paymentRequestCreate(array(
			"purpose" => $paying_purpose,
			"amount" =>  $paying_amount,
			"buyer_name" => $payer_name,
			"send_email" => true,
			"email" => $payer_email,
			"phone" => $payer_phone,
			"send_sms" => true,
			//"webhook" => $webhook_url,
			"allow_repeated_payments" => false,
			"redirect_url" => $redirect_url
			));
		//print_r($response);
		$pay_url =$response['longurl'];
		header('Location:'.$pay_url);
	}
	catch (Exception $e) {
		print('Error: ' . $e->getMessage());
	}
	
}
?>

