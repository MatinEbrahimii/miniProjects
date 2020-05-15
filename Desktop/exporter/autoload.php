<?php
function my_autoloader($class)
{
    // echo $class . " was called !<br>";
    $file_path = "lib/{$class}.php";
    if (file_exists($file_path) && is_readable($file_path)) {
        include_once $file_path;
    } else {
        // 
    }
}


spl_autoload_register("my_autoloader");
