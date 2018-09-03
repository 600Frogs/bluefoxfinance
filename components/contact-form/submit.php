<?php
  $to = 'zavery1992@gmail.com' . "\r\n";
  $subject = 'message';
  $name = $_GET['cname'];
  $email = $_GET['cemail'];
  $number = $_GET['cnumber'];
  $message = "************************************************** \r\n" .
  	         "Message from you website!  \r\n" .
             "************************************************** \r\n" .	
    
  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
                "Number: " . $number . "\r\n" .
  	        "Message: " . $_GET["cmessage"] . "\r\n"; 
  $headers = "From: " . $name . "<" . $email . "> \r\n" .
  	         "Reply-To: " . $email . "\r\n" .
             "MIME-Version: 1.0" . "\r\n" .
             "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail($to, $subject, $message, $headers); 
 ?>