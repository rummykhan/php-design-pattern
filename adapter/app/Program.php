<?php

namespace App;


class Program
{
    protected $fileTransfer = null;

    public function __construct(FileTransferInterface $fileTransfer)
    {
        $this->fileTransfer = $fileTransfer;
    }

    public function transferFiles($target, $files)
    {
        $this->fileTransfer->connect($target);
        $this->fileTransfer->transfer($files);
    }
}