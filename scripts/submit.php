
    

Thanks for your message!

<?php


  
	$from = preg_replace("([\r\n])", "", $_POST['email']);
	$subject = preg_replace("([\r\n])", "", $_POST['subject']);

	$match = "/(bcc:|cc:|content\-type:)/i";
	if (preg_match($match, $from) ||
		preg_match($match, $subject) ||
		preg_match($match, $body)) {
	  die("Header injection detected.");
	}
	
	// If no url (to kick out spammers)
	if(isset($_POST['url']) && $_POST['url'] == ''){
		$userName 		= $_POST['myName'];
		$userEmail	 	= $_POST['myEmail'];
		$userCompany	 	= $_POST['Company'];
		$userMessage 		= $_POST['myMessage'];

		$to 			= "wendybooth61@gmail.com";
		$subject 		= "Query from " . $userCompany;;
		$body 			= "Information Submitted:";

		$body .= "\r\n Name: " . $userName;
		$body .= "\r\n Company: " . $userCompany;
		$body .= "\r\n Email: " . $userEmail;
		$body .= "\r\n Message: " . $userMessage;

		$headers 		= 'From: BHWD Website <support@bhwb.com>' . "\r\n" .
		'Reply-To: support@bhwd.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();


		//mail($to, $subject, $body);

		mail($to,$subject ,$body, $headers);
	}

?>