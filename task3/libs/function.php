<?php

class ReaderFile
{
    private $null = null;
    private $box = "";

    public function __construct($filename)
    {
        return $this->null = fopen($filename);
    }
}





?>
