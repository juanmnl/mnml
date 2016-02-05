<?php

function color_scheme($color_scheme = COLOR_SCHEME) {
	$output = '';

	$presets = array('light','dark','red','green','cyan','purple','wood','baroque');

	if (isset($color_scheme) && in_array($color_scheme,$presets)) {
		$output = '<link rel="stylesheet" media="screen" href="schemes/'.strtolower($color_scheme).'.css" />';
	}

	if ($output != '') { echo $output; }
}

function pdf_scheme() {
	if (isset($_GET['version']) && $_GET['version'] == 'pdf') {
		echo '<link rel="stylesheet" media="screen" href="schemes/pdf.css" />';
	}
}

function print_scheme() {
	if (isset($_GET['version']) && $_GET['version'] == 'print') {
		echo '<link rel="stylesheet" media="screen" href="schemes/print.css" />';
	}
}

function social_check($setting) {
	if (isset($setting) && $setting != '') {
		return true;
	}
	else {
		return false;
	}
}

function social_profiles() {
	$output = '';

	if(social_check(SM_BLOG_URL)) $output .= '<li><a href="'.SM_BLOG_URL.'" class="rss" title="My Blog" target="_blank">My Blog</a></li>';
	if(social_check(SM_TWITTER_ID)) $output .= '<li><a href="http://twitter.com/'.SM_TWITTER_ID.'" class="twitter" title="Twitter" target="_blank">Twitter</a></li>';
	if(social_check(SM_FACEBOOK_ID)) $output .= '<li><a href="http://www.facebook.com/'.SM_FACEBOOK_ID.'" class="facebook" title="Facebook" target="_blank">Facebook</a></li>';
	if(social_check(SM_LINKEDIN_ID)) $output .= '<li><a href="http://www.linkedin.com/in/'.SM_LINKEDIN_ID.'" class="linkedin" title="LinkedIn" target="_blank">LinkedIn</a></li>';
	if(social_check(SM_FLICKR_ID)) $output .= '<li><a href="http://www.flickr.com/people/'.SM_FLICKR_ID.'/" class="flickr" title="Flickr" target="_blank">Flickr</a></li>';
	if(social_check(SM_YOUTUBE_ID)) $output .= '<li><a href="http://www.youtube.com/user/'.SM_YOUTUBE_ID.'" class="youtube" title="YouTube" target="_blank">YouTube</a></li>';
	if(social_check(SM_YAHOO_MESSENGER_ID)) $output .= '<li><a href="ymsgr:sendim?'.SM_YAHOO_MESSENGER_ID.'" class="yahoo" title="Yahoo Messenger">Yahoo Messenger</a></li>';
	if(social_check(SM_SKYPE_ID)) $output .= '<li><a href="skype:'.SM_SKYPE_ID.'?chat" class="skype" title="Skype">Skype</a></li>';

	echo $output;
}

function resume_url() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

function validate_email($email) {
	$regex = '/([a-z0-9_.-]+)'. # (Name) Letters, Numbers, Dots, Hyphens and Underscores

	'@'. # (@ -at- sign)

	'([a-z0-9.-]+){2,255}'. # Domain) (with possible subdomain(s) ).

	'.'. # (. -period- sign)

	'([a-z]+){2,10}/i'; # (Extension) Letters only (up to 10 (can be increased in the future) characters)

	if($email == '') { 
		return false;
	}
	else {
		$eregi = preg_replace($regex, '', $email);
	}

	return empty($eregi) ? true : false;
}

?>