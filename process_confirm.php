<?
session_start();
include "connect_wr.php";
if (isset($_POST['phone_number'])){
	if (isset($_POST['pass_code'])){
		$phone_number = $_POST['phone_number']; 
		$pass_code = $_POST['pass_code']; 
		
		if ($pass_code && $phone_number) {
			$info = mysql_query ("SELECT * FROM `users` WHERE `username` = '$phone_number' AND `activation_code` = '$pass_code' LIMIT 0 , 30") or die (mysql_error());
			if (mysql_num_rows($info) > 0){
				mysql_query("UPDATE `dumaremote`.`users` SET `has_confirmed` = '1' WHERE `username` = '$phone_number' and `activation_code` = '$pass_code' LIMIT 1") or die (mysql_error());
					$_SESSION["myusername"] = $phone_number;
					header("location:generalInfo?B$@4it=1.php");
			}
			else{
				header("location:confirm.php?B$@4it=2&pn=".$phone_number);
			}
		}
		else{
			header("location:confirm.php?B$@4it=1");
		}
	}
}

?>