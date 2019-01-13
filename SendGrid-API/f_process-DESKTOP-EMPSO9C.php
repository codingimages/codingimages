<?php
session_start();

/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$webDesign = trim($_POST['webDesign']);
$design = trim($_POST['design']);

if(empty($name) && empty($email) && empty($webDesign) && empty($design)) {
    $_SESSION['msgFields'] = "Please enter mandatory fields";
    return header("Location:../index.php");
} else {
    /*Content*/
    $from = new SendGrid\Email($name, $email);
    $subject = "Contact Form - CODING IMAGES";
    $to = new SendGrid\Email("CODING IMAGES", "rnavedojr@gmail.com");
    $content = new SendGrid\Content("text/html", "You have a new message with following details<hr>.<br>Name: $name<br><br>Email: $email<br><br>Web Development: $webDesign<br><br>Design: $design");

    /*Send the mail*/
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $apiKey = ('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');
    $sg = new \SendGrid($apiKey);

    /*Response*/
    $response = $sg->client->mail()->send()->post($mail);
    
    if($response->_status_code == 202){
        $_SESSION['msg'] = "Message has been sent successfully";
    } else {
        $_SESSION['msg'] = "Message has not been sent successfully";
    }
    header("Location:../index.php");
}
