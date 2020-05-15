<?php
include "init.php";

$ext = $_POST['format'];
$form_data = $_POST['data'];
$filename = $_POST['filename'];

if ($ext == 'all') {
    $exporters = array(
        new TxtExporter($filename),
        new CsvExporter($filename),
        new JsonExporter($filename)
    );
    foreach ($exporters as $exporter) {
        $exporter->import($form_data);
        $exporter->export();
    }
} else {
    $classname = ucfirst($ext) . "Exporter";
    $exportMan = new $classname($filename);
    $exportMan->import($form_data);
    $exportMan->export();
}


/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    switch ($ext) {
        case 'pdf':
            // generate pdf
            break;
        case 'txt':
            // generate txt
            break;
        case 'json':
            // generate json
            break;
        default:
            echo "Invalid File Extension !";
            break;
    }
}
*/
