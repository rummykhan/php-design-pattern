<?php

namespace App;

interface Mailer
{
    public function sendTo($email);

    public function setBody($body);

    public function send();
}