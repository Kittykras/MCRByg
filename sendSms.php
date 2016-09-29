<?php

$sMessage = $_POST["message"];
sendSMS($sMessage);
header("location:contact.php?smssuccess");

function sendSMS($sMessage, $name) {
    $login = 'MCRByg';
    $password = 'Reidar1515';
    $to = '+4531668691';
    $from = $name;
    $text = urlencode($sMessage); // make the phrase URL friendly
    $sUrl = "https://suresms.com/Script/GlobalSendSMS.aspx"; // point to this URL
    $sLink = $sUrl . "?login=" . $login . "&password=" . $password . "&to=" . $to . "&from=" . $from . "&text=" . $text; // create the SMS
    file_get_contents($sLink); // send the SMS
    // echo file_get_contents($sLink); // to see the JSON response from the server
}
