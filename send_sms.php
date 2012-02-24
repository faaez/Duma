<?
// Download the twilio-php library from twilio.com/docs/libraries
 
require('twilio/Services/Twilio.php');
 
// Find your credentials at twilio.com/user/account

function send_message($phone_number, $message_body){
	$client = new Services_Twilio('ACc432f4177f214f05b8a24425f113f94d', '658f7773845e940e880822941e7f332e');

	$message = $client->account->sms_messages->create(
	  '+16096812684', // From a Twilio number in your account
	  $phone_number, // Text any number
	  $message_body
	);
	return true; 
}
?>