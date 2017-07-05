<?php

namespace App\Dropbox;

class Dropbox implements DropboxInterface
{
    public function login($username, $password)
    {
        print("[Dropbox] Trying to login to dropbox using {$username} - {$password} <br>");
        print("[Dropbox] Logged In <br>");
    }

    public function transferFiles($files)
    {
        print("<hr>");
        for ($i=0; $i<5; $i++){
            print("[Dropbox] Transferring files...<br>");
        }

        print("[Dropbox] Transfer complete.<br>");
    }
}