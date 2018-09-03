<?php

  $to = 'zavery1992@gmail.com ' . "\r\n";
  $subject = 'New Loan Enquiry';
  $name = $_GET['fullName'];
  $phone = $_GET['phoneNumber']; 
  $email = $_GET['emailAddress']; 
  $loantype = $_GET['loanType']; 
  $amount = $_GET['loanAmount']; 
  $currentURL = $_GET['currentURL'];
  $additionalMessage = $_GET['additionalMessage']; 
  $message = "************************************************** \r\n" .
  	         "Message from you website!  \r\n" .
             "************************************************** \r\n" .	
    
  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
                "Phone: " . $phone . "\r\n" .
                "Loan Type: " . $loantype . "\r\n" .
                "Loan Amount: " . $amount . "\r\n" .
  	        "Message: " . $additionalMessage . "\r\n" .
                "Sent from page: " . $currentURL . "\r\n"; 
  $headers = "From: " . $name . "<" . $email . "> \r\n" .
  	         "Reply-To: " . $email . "\r\n" .
             "MIME-Version: 1.0" . "\r\n" .
             "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail($to, $subject, $message, $headers); 
 ?>