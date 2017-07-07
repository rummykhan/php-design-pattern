<?php

namespace App;

interface FileTransferInterface
{
    public function connect($target);

    public function transfer($files);

    public function close();

}