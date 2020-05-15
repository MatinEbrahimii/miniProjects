<?php

class TxtExporter extends Exporter
{
    public static $ext = 'txt';

    public function export()
    {
        $filepath = "upload/{$this->filename}." . static::$ext;
        file_put_contents($filepath, $this->getData());
        $url = "http://php3.exp/20/exporter/$filepath";
        echo "<a href='$url'>Download Your " . static::$ext . " File</a><br>";
    }
}
