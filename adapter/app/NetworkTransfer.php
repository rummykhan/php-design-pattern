<?php

namespace App;


class NetworkTransfer implements FileTransferInterface
{

    public function connect($target)
    {
        print("[NT] Connecting to {$target} <br>");
        print("[NT] Connected to {$target} <br>");
    }

    public function transfer($files)
    {
        print("<hr>");
        for ($i = 0; $i < 5; $i++) {
            print("[NT] Transferring files ... <br>");
        }
        print("[NT] Files tansfer complete.<br>");
    }

    public function close()
    {
        print("<hr>");
        print("[NT] Connection closed.<br>");
    }
}