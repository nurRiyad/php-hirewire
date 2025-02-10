<?php
require '../helpers.php';


$routes = [
  '/' => 'controllers/index.php',
  '/listing' => 'controllers/listing/index.php',
  '/listing/create' => 'controllers/listing/create.php',
  '/404' => 'controllers/error/404.php',
];

$currentRoute = $_SERVER['REQUEST_URI'];


if (array_key_exists($currentRoute, $routes)) {
  require basePath($routes[$currentRoute]);
} else {
  require basePath($routes['/404']);
}
