<?php

spl_autoload_register(function($className) {
    $filename = str_replace('\\', '/', __DIR__ . DIRECTORY_SEPARATOR . $className . '.php');
    include_once ($filename);
});