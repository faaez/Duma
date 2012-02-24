<?
include "connect_wr.php";
require "send_sms.php";
$error = 0; 
if (isset($_POST["name"])){
	$name = $_POST["name"];
	if ($name == "Name"){
		$error = 1; 
	}
}
else
{
	$error = 1; 
}
$terms = null; 

if (isset($_POST["terms"])){
	$terms = $_POST["terms"];
}
if (isset($_POST["phone"])){
	$phone = $_POST["phone"];
	$dirty_phone = $_POST["phone"];
	if ($phone == "Phone Number"){
		$error = $error + 10; 
	}
}
else
{
		$error = $error + 10; 
}


if (isset($_POST["pin1"])){
	$pin1 = $_POST["pin1"];
	if ($pin1 == "Pin" || $pin1 == null){
		$error = $error + 10000; 
	}
}
else
{
		$error = $error + 10000; 
}

if (isset($_POST["pin2"])){
	$pin2 = $_POST["pin2"];
	if ($pin2 == "Re-Enter Pin" || $pin2 == null){
		$error = $error + 10000000; 
	}
}
else
{
		$error = $error + 10000000; 
}

if ($pin1 != $pin2) {
	$error = $error + 1000000;
}
if (preg_match("/\d{4}/", $pin1) && (strlen($pin1) == 4)) {
    //die("fine $phone");
} else {
    $error = $error + 100000;
}
$phone = ereg_replace("[^+0-9]", "", $phone); 
$name = mysql_real_escape_string($name);

if ((substr($phone, 0,2)) == "+1"){
	$phone = str_replace("+1", "", $phone);
}

if (preg_match("/\d{10}/", $phone) && (strlen($phone) == 10)) {
    //die("fine $phone");
} else {
    $error = $error + 1000;
}
/*
if (preg_match('/\(?\d{3}\)?[-\s.]?\d{3}[-\s.]\d{4}/x', $phone) == true) {
	die ("valid");
}else{
	die("Invalid $phone");
	
}*/

$result = mysql_query("SELECT * FROM `users` WHERE username = '$phone'") or die (mysql_error()); 
$uname = mysql_fetch_assoc($result);
$is_registered = $uname['is_registered'];

if ($is_registered) {
	$error = $error + 100; 
}
if ($error || !$terms) {
	header("location:index.php?D@0v^=$error&nm*=$name&pn*=$dirty_phone&tm*=$terms");
}
else{
	$cryptedPassword = md5($pin1);
	// Random confirmation code
	$passkey=rand(1000,9999);
	$confirm_code=md5(uniqid(rand()));
	$result = mysql_query("SELECT * FROM `users` WHERE `username` = '$phone' LIMIT 0 , 30") or die(mysql_error());

	$lastID = null;

	if (mysql_num_rows($result) > 0) {
		$info = mysql_fetch_assoc($result);
		$lastID = $info["id"];
		mysql_query("UPDATE `dumaremote`.`users` SET `username` = '$phone',
					`password` = '$cryptedPassword',
					`name` = '$name',
					`activation_code` = '$passkey',
					`forgotten_password_code` = '$confirm_code',
					`is_registered` = '1' WHERE `users`.`id` ='$lastID' LIMIT 1") or die(mysql_error());
	}
	else{
	mysql_query("INSERT INTO users (name,password,activation_code,forgotten_password_code,username,is_registered) values ('$name','$cryptedPassword', '$passkey','$confirm_code','$phone','1')") or die (mysql_error());
	$lastID = mysql_insert_id();
	}
	$message = "Your Duma Account has been created! Confirmation code: $passkey. ";
	$result = send_message($phone, $message);
	
	if($result)
	{
		//send add with lastID
		header("location:confirm.php?pn=$phone");

	}
	else
	{
		header("location:index.php?B$@4it=2");
	}


}
?>