<?php

$to= "change@site.com";
$from = "no-reply@site.com";

$headers = "From:" . $from . "\r\n";

$subject = "New subscription";
$body = "New user subscription: " . $_REQUEST['email'];

if(filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))
{
	if(mail($to, $subject, $body, $headers, "-f" . $from))
	{
		echo "Your e-mail has been added to out mailing list"; 
	}
	else
	{
		echo "There was a problem with your e-mail";
	}
}
else
{
	echo "There was a problem with your e-mail";
}