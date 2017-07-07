<?php

require 'vendor/autoload.php';

$request = new \App\Http\HttpRequest(
    ['csrfToken' => 'rummykhan'],
    ['name' => ' rummykhan '],
    ['path' => '/home']
);

$middleware = new \App\Middleware\VerifyCSRFToken();
$middleware->setSuccessor(new \App\Middleware\StripSpaces());

$middleware->handle($request);