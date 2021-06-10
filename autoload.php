<?php

// PHP-FIG: PSR-4 autoloader
spl_autoload_register(function ($classname) {
    // On change les \ en / et on rajoute .php
    $filename = __DIR__ . "/" . str_replace("\\", DIRECTORY_SEPARATOR, $classname) . ".php";

    // Si le fichier existe on l'inclue
    if (file_exists($filename)) {
        require($filename);
    }
});
