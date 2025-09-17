<?php

require_once 'conf.php';

$directory = [
    'Layouts',
    'Forms'
];

spl_autoload_register(function($className) use ($directory){
    foreach ($directory as $dir){
        $filepath = __DIR__ . '/' . $DIR . '/' . $className . '.php';  
        if (file_exists($filePath)){
            require_once $filePath;
            return;
        }  
    }
});

// Create various instances to test autoloading
