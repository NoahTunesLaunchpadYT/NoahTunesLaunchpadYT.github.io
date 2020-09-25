<?php	
	if(empty($_POST['name_29885']) && strlen($_POST['name_29885']) == 0 || empty($_POST['email_29885']) && strlen($_POST['email_29885']) == 0 || empty($_POST['message_29885']) && strlen($_POST['message_29885']) == 0)
	{
		return false;
	}
	
	$name_29885 = $_POST['name_29885'];
	$email_29885 = $_POST['email_29885'];
	$message_29885 = $_POST['message_29885'];
	$optin_29885 = $_POST['optin_29885'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_29885: $name_29885 \nEmail_29885: $email_29885 \nMessage_29885: $message_29885 \nOptin_29885: $optin_29885 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_29885";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>