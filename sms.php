<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "put username here";
$apikey     = "put api key here";

// Initialize the SDK
$AT = new AfricasTalking($username, $apikey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+put phone number here";

// Set your message
$message   = "Welcome to AT SMS API";

// Set your shortCode or senderId
// $from       = "";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message
        // 'from'    => $from
    ]);

    echo json_encode($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}