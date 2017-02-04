<?php
	require '../phpmailer/PHPMailerAutoload.php';
function send_verify_email($address,$fname,$lname,$msg){

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Set who the message is to be sent from
	$mail->setFrom('admin@kab.esy.es', 'admin@kab.esy.es');
	//Set an alternative reply-to address
	$mail->addReplyTo('admin@kab.esy.es', 'admin@kab.esy.es');
	//Set who the message is to be sent to
	$mail->addAddress($address,$fname." ".$lname);
	//Set the subject line
	$mail->Subject = 'Verify email';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body

	$mail->msgHTML($msg);
	$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	// $mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
	    return 0;
	} else {
	    return 1;
	}
}
function send_reset_password($address,$fname,$lname,$msg){
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Set who the message is to be sent from
	$mail->setFrom('admin@kab.esy.es', 'kab.esy.es');
	//Set an alternative reply-to address
	$mail->addReplyTo('admin@kab.esy.es', 'kab.esy.es');
	//Set who the message is to be sent to
	$mail->addAddress($address,$fname." ".$lname);
	//Set the subject line
	$mail->Subject = 'Reset password';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($msg);
	$mail->AltBody = 'This is a plain-text message body';

	//Attach an image file
	// $mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
	   return 0;
	} else {
	    return 1;
	}
}
?>
