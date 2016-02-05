<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

// Including template settings file
include_once('inc-settings.php');
// Including additional functions
include_once('inc-functions.php');

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);
	$subject = stripslashes($_POST['subject']);
	$message = stripslashes($_POST['message']);


	$error = '';

	// Check name

	if(!$name)
	{
		$error .= 'Please enter your name.<br />';
	}

	// Check email

	if(!$email)
	{
		$error .= 'Please enter an e-mail address.<br />';
	}

	if($email && !validate_email($email))
	{
		$error .= 'Please enter a valid e-mail address.<br />';
	}

	// Check agains bot habit

	if ($name && $email && $name==$email) {
		$error .= 'Name and email cannot be the same.<br />';
	}
	
	// Check subject

	if(!$subject)
	{
		$error .= 'Please enter a subject.<br />';
	}

	// Check message (length)

	if(!$message || strlen($message) < 10)
	{
		$error .= "Please enter your message. It should have at least 10 characters.<br />";
	}


	if(!$error)
	{
		$mail = mail(WEBMASTER_EMAIL, $subject, $message,
		 "From: ".$name." <".$email.">\r\n"
		."Reply-To: ".$email."\r\n"
		."X-Mailer: PHP/" . phpversion());

		if($mail)
		{
			echo 'OK';
		}

	}
	else
	{
		echo $error;
	}
}
?>