<?php

require 'vendor/autoload.php';

function sendEmail(\App\Mailer $mailer, $to, $body){
    $mailer->sendTo($to);
    $mailer->setBody($body);
    $mailer->send();
}

echo "<hr>";
sendEmail(new \App\AmazonMail(), "rehan@infamous.ae", "This is mail body.");
echo "<hr>";
sendEmail(new \App\Gmail(), "rehan@infamous.ae", "This is mail body.");