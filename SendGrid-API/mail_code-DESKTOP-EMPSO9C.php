<?php
session_start();

/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Content*/
$from = new SendGrid\Email($senderName, $sendAddress);
$subject = '';
$to = new SendGrid\Email($receiver, $receiverAddress);
$content = new SendGrid\Content("text/html", "Write Your Content here.");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);

if($response->_status_code == 202){
    $_SESSION['msg'] = "Message has been sent successfully.";
} else {
    $_SESSION['msg'] = "Message has not been sent successfully.";
}
