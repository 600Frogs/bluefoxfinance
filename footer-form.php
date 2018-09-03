<?php
  $to = 'zavery1992@gmail.com' . "\r\n";
  $subject = 'message';
  if (isset($_GET['name'])) {$name = $_GET['name'];};
  $email = $_GET['femail'];
  $number = $_GET['number'];
  $message = "************************************************** \r\n" .
  	         "Message from you website!  \r\n" .
             "************************************************** \r\n" .	
    
  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
                "Number: " . $number . "\r\n" .
  	        "Message: " . $_GET["message"] . "\r\n"; 
  $headers = "From: " . $name . "<" . 'zavery1992@gmail.com' . "> \r\n" .
  	         "Reply-To: " . $email . "\r\n" .
             "MIME-Version: 1.0" . "\r\n" .
             "Content-type:text/html;charset=UTF-8" . "\r\n";
	mail($to, $subject, $message, $headers); 
 ?>