<?php

use Controllers\AnimalController;
use Core\Router\Request;
use Core\Router\Router;

require 'autoload.php'; // Pas toucher svp

echo "<pre>";
var_dump(new Request());
echo "</pre>";

// $controller = new AnimalController();
// $controller->index();
