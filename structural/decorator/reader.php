<?php

interface ReaderInterface
{
    public function read();
}

class TextReader implements ReaderInterface
{
    protected $path = null;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function read()
    {
        return file_get_contents($this->path);
    }
}

class LineReader implements ReaderInterface
{
    protected $reader = null;

    public function __construct(ReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function read()
    {
        return explode('\r\n', json_encode($this->reader->read()));
    }
}

$text_reader = new TextReader("dummy.txt");
$line_reader = new LineReader($text_reader);

print_r($line_reader->read());