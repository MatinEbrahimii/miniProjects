<?php

class JsonExporter extends Exporter
{
    public static $ext = 'json';

    public function export()
    {
        $filepath = "upload/{$this->filename}." . static::$ext;
        file_put_contents($filepath, json_encode(array($this->getData())));
        $url = "http://php3.exp/20/exporter/$filepath";
        echo "<a href='$url'>Download Your " . static::$ext . "  File</a><br>";
    }
}
