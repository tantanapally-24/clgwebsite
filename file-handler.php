<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$POST['message'];

$email_from='info@vignancollege.com';

$email_subjec'New Form Submission';

$email_body="User Name:$name.\n". 
             "User Email:$visitor_email.\n".
             "Subject:$subject.\n".
             "User message:$message.\n";

$to='babusridhar13579@gmail.com';

$headers="From: $email_from\r\n";

$headers .="Reply-To:$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");
?>