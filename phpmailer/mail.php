<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('admin@kab.esy.es', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('admin@kab.esy.es', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('kaowantna@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("test");
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

// $mail = new PHPMailer;
// 	//Set who the message is to be sent from
// 	$mail->setFrom('admin@kab.esy.es', 'kab.esy.es');
// 	//Set an alternative reply-to address
// 	$mail->addReplyTo('admin@kab.esy.es', 'kab.esy.es');
// 	//Set who the message is to be sent to
// 	$mail->addAddress("kaowantna@gmail.com"," asdasd");
// 	//Set the subject line
// 	$mail->Subject = 'Reset password';
// 	//Read an HTML message body from an external file, convert referenced images to embedded,
// 	//convert HTML into a basic plain-text alternative body
// 	$mail->AltBody = 'Reset password';

// 	$mail->msgHTML("สวัสดีคุณ");
// 	//Attach an image file
// 	// $mail->addAttachment('images/phpmailer_mini.png');

// 	//send the message, check for errors
// 	if (!$mail->send()) {
// 	    echo "Mailer Error: " . $mail->ErrorInfo;
// 	} else {
// 	    echo "Message sent!";
// 	}
// 
?>