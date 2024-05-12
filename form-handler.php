<?php
$name=$_POST['name'];
$visitor_mail=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['mesaj'];
$email_from='augusutina.dogaru@student.upt.ro';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n"."User Email:$visitor_email.\n"."Subject:$subject.\n"."User Message:$message.\n";
$to='dogaruestera.ed@gmail.com';
$headers="From:$email_from \r\n";
$headers.="Reply-tp: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>