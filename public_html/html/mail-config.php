<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $smtpUser sendgrid info/not using
 * @param string $smtpSecret api key
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Nehomah Mora nmora9@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//the SendGrid SMTP authorization
$smtpUser = '-- SendGrid USER --';
$smtpSecret = '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';

// your Google reCAPTCHA keys here
$siteKey = '6LeQtZQUAAAAAJngS1nDJmNeDoT72yQ6qN79-oSU';
$secret = '6LeQtZQUAAAAAMhfMfRnnAfc1hs5A8K7QrpL89XX';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["sunkaskasingers@yahoo.com", "Sunka Ska"];