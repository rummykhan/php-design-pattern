<?php

namespace App\Dropbox;


interface DropboxInterface
{
    public function login($username, $password);

    public function transferFiles($files);
}