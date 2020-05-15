<?php

abstract class Exporter implements Exportable, Importable
{
    protected $data;
    protected $filename;
    public static $ext;

    public function __construct($filename)
    {
        $this->filename = $filename;
        // static::$ext = $ext;
    }

    public function import(string $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getFilename()
    {
        return $this->filename;
    }
}
