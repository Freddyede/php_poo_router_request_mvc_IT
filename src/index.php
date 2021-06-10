<?php

use Core\Router\Request;
use Core\Router\Router;
use Controllers\SocksController;
require 'autoload.php'; // Pas toucher svp
require 'routes.php';

$router = new Router();
$router->run();

// $controller = new AnimalController();
// $controller->index();
