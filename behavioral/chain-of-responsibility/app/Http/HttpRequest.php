<?php

namespace App\Http;

class HttpRequest implements Request
{
    protected $cookies;
    protected $body;
    protected $path;

    public function __construct($cookies, $body, $path)
    {
        $this->cookies = $cookies;
        $this->body = $body;
        $this->path = $path;
    }

    public function getCookies()
    {
        return $this->cookies;
    }

    public function getFormBody()
    {
        return $this->body;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setFormBody($body)
    {
        $this->body = $body;
    }
}