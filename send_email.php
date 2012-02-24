<?
//Connect To Database
$hostname='dumadb.db.7633178.hostedresource.com';
$username='dumadb';
$password='kaziPap!1';
$dbname='dumadb';

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

if (isset($_POST["email"])){
	$email = $_POST["email"];

	echo "$email";
	
	$result = mysql_query("SELECT `activation_code` FROM `users` WHERE `email` = '$email'");
	$result = mysql_fetch_assoc($result);
	$passkey = $result['activation_code'];

	if ($passkey) {
		$to = $email;
		$subject = 'Duma confirmation email';
		$message="Your Confirmation link \r\n";
		$message.="Click on this link to activate your account \r\n";
		$message.="http://webscript.princeton.edu/~ekuto/duma/duma/confirm.php?passkey=$passkey";


		$headers .= 'From: DUMA admin <admin@DUMA.co.ke>' . "\r\n";
		$headers .= 'Cc: ' . "\r\n";
			
		// if you want to receive a copy
		//$headers .= 'Bcc: qtoeric@gmail.com' . "\r\n";

		// Mail it
		
		$result = mail($to, $subject, $message, $headers);

		if($result)
		{
			header("location:index.php?B$@4it=1");
		}
		else
		{
			header("location:index.php?B$@4it=2");
		}
	} else{
			header("location:index.php?B$@4it=5&given=\"$email\"");
	}
}
else{
	header("location:index.php?B$@4it=4");
}
?>