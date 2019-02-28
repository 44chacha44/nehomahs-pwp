<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer library with Google reCAPTCHA integration.
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 **/

// require all composer dependencies
require_once(dirname(__DIR__, 1) . "/vendor/autoload.php");

// require mail-config.php
require_once ("mail-config.php");

use\SendGrid\Mail;
$sendgrid = new \SendGrid($sendGridSecret);

// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
		// if there's a reCAPTCHA error, throw an exception
		// if (!$resp->isSuccess()) {
		//			throw(new Exception("reCAPTCHA error!));
		//	}

		/**
		 * Sanitize the inputs from the form: name email subject and message.
		 * This assumes jQuery (NOT Angular!) will be AJAX submitting the form,
		 * so we're using the $_POST superglobal.
		 *
		 **/
		$name = filter_input(INPUT_POST)
}
