<?php

namespace App\Http;


interface Request
{
    public function getCookies();

    public function getFormBody();

    public function setFormBody($body);

    public function getPath();
}