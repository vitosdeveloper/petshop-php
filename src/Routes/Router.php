<?php

namespace Routes;

use Controllers\HomeController;
use Controllers\NotFoundController;

class Router
{
  private array $uriArr;
  private string $controller;
  private string $method;
  private string $params;
  private array $routes = [
    'home' => HomeController::class,
    'notFound' => NotFoundController::class
  ];

  public function __construct()
  {
    $this->getUri();
    $this->getController();

    $controller = new $this->routes[$this->controller]();
    $controller->index();
  }

  private function getUri()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $this->uriArr = explode('/', ltrim($uri, '/'));
  }

  private function getController()
  {
    $controller = $this->uriArr[0];
    if ($controller === '') return $this->controller = 'home';
    if (!array_key_exists($controller, $this->routes)) {
      return $this->controller = 'notFound';
    }
    $this->controller = $controller;
  }
  private function getMethod()
  {
  }
  private function getParams()
  {
  }
}
