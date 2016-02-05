<?php
// Including template settings file
include_once('inc-settings.php');
// Including additional functions
include_once('inc-functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>CV | Contact | Juan Manuel Cornejo</title>

	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

	<!-- Including jQuery & Form Validation Plugin -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script src="js/jquery.form.js" type="text/javascript"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

	<!-- Contact Form -->
	<script src="js/contact-form-validation.js" type="text/javascript"></script>
</head>

<body id="contactbody">
	<div id="contactformwrapper">
		<form id="contactform" action="">
			<h2>Contact m3</h2>
			<div id="contactformnote"></div>

			<div id="fields">
				<p><label>Name</label><input class="textbox" type="text" name="name" value="" /></p>

				<p><label>E-Mail</label><input class="textbox" type="text" name="email" value="" /></p>

				<p><label>Subject</label><input class="textbox" type="text" name="subject" value="" /></p>

				<p><label>Message</label><textarea class="textbox" name="message" rows="5" cols="25" ></textarea></p>

				<p>
					<label>&nbsp;</label><input class="button" type="submit" name="submit" value="Send Message" /><br />
					<label>&nbsp;</label><strong>All</strong> the above fields are <strong>required</strong>.
				</p>
			</div>
		</form>
	</div> 
</body>
</html>