<?php  //echo phpinfo(); 

$to = 'kannan2187@gmail.com';

$subject = 'Website Change Request';

$headers  = "From: sales@thephonechoice.com\r\n";
$headers .= "Reply-To: " . strip_tags($to) . "\r\n";
$headers .= "CC: spkahan87@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong>This is strong text</strong> while this is not.</p>';


echo mail($to, $subject, $message, $headers);

?>