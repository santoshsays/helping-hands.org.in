<?php
include('config.php');
include('../database/dbconfig.php');

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without <>
$mac_calculated = hash_hmac("sha1", implode("|", $data),"68fd4108219740d988791159ab2677ca";
if($mac_provided == $mac_calculated){
    if($data['status'] == "Credit"){
        // Payment was successful, mark it as successful in your database.
        // You can acess payment_request_id, purpose etc here. 
        $payer_name =$data['buyer_name'];
        $payer_email =$data['buyer'];
        $payer_phone=$data['buyer_phone'];
        $payer_amount=$data['amount'];
        $paying_purpose=$data['purpose']
        $paying_id=$data['payment_id'];
        $paying_dates = date('Y-m-d H:i:s');
        $paying_status=$data['status'];
        
        $query = "INSERT INTO donation (d_name,d_email,d_phone,d_amount,d_purpose,d_payid,d_date,d_status)
         VALUES ('$payer_name','$payer_email','$payer_phone','$payer_amount','$paying_purpose','$paying_id','$paying_date','$paying_status')";
        $query_run = mysqli_query($con, $query);
            

        $to = $email;
        $subject = 'Test Payment Details | ' .$data['buyer_name'].'';
        $message = "<h1>Payment Details</h1>";
        $message .= "<hr>";
        $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
        $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
        $message .= "<hr>";
        $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
        $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
        $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
        
        
        $message .= "<hr>";

      
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        // send email
        mail($to, $subject, $message, $headers);
    }
    else{
        // Payment was unsuccessful, mark it as failed in your database.
        // You can acess payment_request_id, purpose etc here.
    }
}
else{
    echo "MAC mismatch";
}
?>