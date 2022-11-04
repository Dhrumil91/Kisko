<?php
print_r($_POST);
die();
session_start();
/* Your authentication key */
//$authKey = "abgbsaxhbsadbasbhdjhsajhd";

/* Multiple mobiles numbers separated by comma */
$mobileNumber = $_POST["phone"];

/* Sender ID,While using route4 sender id should be 6 characters long. */
$senderId = "MOBEXX";
$username = "qarmatek";
$password = "dhaval123";


/* Your message to send, Add URL encoding here. */
$rndno=rand(1000, 9999);
$message = urlencode("otp number.".$rndno);

/* Define route */
//$route = "route=4";
/* Prepare you post parameters */
$postData = array(
    'username' => $username,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'password ' => $password
);

/* API URL*/
$url="http://alerts.sinfini.com/api/web2sms.php";

/* init the resource */
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    /*,CURLOPT_FOLLOWLOCATION => true */
));


/* Ignore SSL certificate verification */
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


/* get response */
$output = curl_exec($ch);

/* Print error if any */
if(curl_errno($ch))
{

    echo 'error:' . curl_error($ch);
}

curl_close($ch);

if(isset($_POST['btn-save']))
{
	
$_SESSION['name']=$_POST['reg_name'];
$_SESSION['email']=$_POST['reg_email'];
$_SESSION['phone']=$_POST['reg_phone'];
$_SESSION['otp']=$rndno;
header( "Location: otp.php" );

}
?>  