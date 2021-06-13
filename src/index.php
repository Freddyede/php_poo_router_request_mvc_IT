<?php

use Core\Router\Router;

require 'autoload.php'; // Pas toucher svp
require 'routes.php';

$router = new Router();
$router->run();
