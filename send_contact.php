<?php
// Contact subject
$subject ="$subject";
// Details
$message="$detail";

// Mail of sender
$mail_from="$customer_mail";
// From
$header="from: $name <$mail_from>";

// Enter your email address
$to ='cablauvelt@gmail.com';

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email
// display message "We've received your information"
if($send_contact){
echo "We've received your contact information";
}
else {
echo "ERROR";
}
?>
