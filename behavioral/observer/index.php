<?php

require 'vendor/autoload.php';

$loggedIn = new LoggedIn();
$loggedIn->attach([
    new EmailUser(),
    new NotifyStakeHolders()
]);
$loggedIn->check();