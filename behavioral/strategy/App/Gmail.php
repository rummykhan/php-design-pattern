<?php

namespace App;


class Gmail implements Mailer
{
    public function sendTo($email)
    {
        var_dump("Send email to {$email}.");
    }

    public function setBody($body)
    {
        var_dump("Set body to {$body}.");
    }

    public function send()
    {
        var_dump("Sending email using Gmail Mail.");
    }
}