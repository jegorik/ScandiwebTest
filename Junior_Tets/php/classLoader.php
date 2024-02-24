<?php

/*This function check if class exist in "products" directory. If it exist load it.*/
function loadProductClass($className)
{
    $file = __DIR__ . '/products/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

/*This function check if class exist in "root" directory. If it exist load it.*/
function loadRootClass($className)
{
    $file = __DIR__ . '/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

/*Register load functions.*/
spl_autoload_register('loadProductClass');
spl_autoload_register('loadRootClass');

