<?php

require 'vendor/autoload.php';


$program = new \App\Program(new \App\Dropbox\DropboxAdapter());

$program->transferFiles('rummykhan:rummykhan', ['file1', 'file2', 'file3']);

$program2 = new \App\Program(new \App\NetworkTransfer());

$program2->transferFiles('target pc', ['file1', 'file2', 'file3']);