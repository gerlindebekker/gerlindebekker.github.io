<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
    
	
	$to      = 'jessa.bekker@gmail.com';
	$total_subject = 'GerlindeBekker.be Contact Form: '.$subject;

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $total_subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Thank you for your message!';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to '.$to;
	}
	
	
	echo json_encode($res);
}

?>
