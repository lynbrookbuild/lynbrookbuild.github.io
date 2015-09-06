<?php
if(empty($_POST['email']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo '<script type="text/javascript">'
   , 'alert("Please enter your email!");'
   , '</script>'
	;
	return false;
   }
	
$email_address = $_POST['email'];
$to = '1mihirpandya@gmail.com';
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nEmail: $email_address";
$headers = "From: noreply@build.github.io\n";
$headers .= "Reply-To: $email_address";	
mail($to,"Add to email list -- BUILD",$email_address,$headers);
return true;			
?>
