<?php

namespace App\Dropbox;

use App\FileTransferInterface;

class DropboxAdapter implements FileTransferInterface
{
    protected $dropbox = null;

    public function __construct()
    {
        $this->dropbox = new Dropbox();
    }

    public function connect($target)
    {
        @list($username, $password) = explode(':', $target);
        $this->dropbox->login($username, $password);
    }

    public function transfer($files)
    {
        $this->dropbox->transferFiles($files);
    }

    public function close()
    {
        return true;
    }
}