<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massege = $_POST['massege'];


$email_from = 'daffodilversity@gmail.com';
$email_subject = 'New Form Submition';
$email_body = "User Name: $name.\n".
                "E-mail: $visitor_email.\n".
                "Subject: $subject\n".
                "User Massege: $massege.\n";


$to = 'hrdoycsediu4@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply_To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");



?>