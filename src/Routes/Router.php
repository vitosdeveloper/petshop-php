<?php

namespace Routes;

use Controllers;

class Router
{
  public function __construct()
  {
    $routes = [
      'home' => Controllers\HomeController::class,
      'notFound' => Controllers\NotFoundController::class,
    ];
    $uriArr = RouterUri::getUri();

    $controller = RouterController::getController($uriArr, $routes);
    $method = RouterMethod::getMethod($routes, $controller, $uriArr);
    $params = $uriArr[2];

    if (!$method) {
      $method = 'index';
      $controller = 'notFound';
    }

    (new $routes[$controller])->$method($params);
  }
}
