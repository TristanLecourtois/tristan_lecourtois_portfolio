<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Parax Contact Form'; 
		$to = 'tristanlecourtois4@gmail.com'; 
		$subject = $_POST['subject']; 
		
		$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	

	mail($to, $subject, $body, $from) or die("Error!");
	if (mail($to, $subject, $body, $from)) {
        header("Location: thank-you.html");
        exit();
    } else {
        echo "Error: Unable to send email.";
    }
	header("location: thank-you.html");
	
	}
	
?>