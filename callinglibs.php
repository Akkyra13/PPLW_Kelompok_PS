<?php
// this is our own 'bootstrap yeah' 
spl_autoload_register(function(string $subdir_name, string $class_name)
{
    $file = __DIR__ . "/logicgates/".strtolower($subdir_name)."/".strtolower($class_name).".php";
    if (file_exists($file)) {
        include_once $file;
    }
});