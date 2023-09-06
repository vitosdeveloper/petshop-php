<?php

namespace Routes;

use Controllers\HomeController;
use Controllers\NotFoundController;

class Router
{
  private int $subtractFromIndex;
  private array $uriArr;
  private string $controller;
  private string $method;
  private string $params;
  private array $routes = [
    'home' => HomeController::class,
    'notFound' => NotFoundController::class,
  ];

  public function __construct()
  {
    $this->getUri();
    $this->getController();
    $this->getMethod();
    $this->getParams();

    $controller = new $this->routes[$this->controller]();
    $method = $this->method;
    $controller->$method($this->params);
  }

  private function getUri()
  {
    $this->subtractFromIndex = $this->isHomeWithoutUri() ? 1 : 0; //lembrar de subtrair com -
    $uri = $_SERVER['REQUEST_URI'];
    $explodedUri = explode('/', ltrim($uri, '/'));
    $this->uriArr = [
      $this->subtractFromIndex ? 'home' : $explodedUri[0],
      ($explodedUri[1 - $this->subtractFromIndex] ?? '') ? $explodedUri[1 - $this->subtractFromIndex] : 'index',
      $explodedUri[2 - $this->subtractFromIndex] ?? ''
    ];
  }
  private function isHomeWithoutUri()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $explodedUri = explode('/', ltrim($uri, '/'));
    return $explodedUri[0] !== 'home' && ($explodedUri[0] === '' || method_exists(HomeController::class, $explodedUri[0]));
  }

  private function getController()
  {
    $controller = $this->uriArr[0];
    if (!array_key_exists($controller, $this->routes)) {
      return $this->controller = 'notFound';
    }
    $this->controller = $controller;
  }
  private function getMethod()
  {
    $controller = $this->routes[$this->controller];
    $method = $this->uriArr[1];
    if (!method_exists($controller, $method)) {
      $this->method = 'index';
      return $this->controller = 'notFound';
    }
    $this->method = $method;
  }
  private function getParams()
  {
    $this->params = $this->uriArr[2];
  }
}
