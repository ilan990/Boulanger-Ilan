<?php

function myAutoloader($className)
{
    $directories = array(
        'controleur/',
        'Modele/',
        'Vue/'
    );

    foreach ($directories as $directory) {
        $fileName = $directory . $className . '.php';
        if (file_exists($fileName)) {
            require_once($fileName);
            return;
        }
    }
}

spl_autoload_register('myAutoloader');
?>