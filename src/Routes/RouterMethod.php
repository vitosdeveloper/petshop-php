<?php

namespace Routes;

class RouterMethod
{
  static public function getMethod(array $routes, string $controller, array $uriArr)
  {
    $controller = $routes[$controller];
    $method = $uriArr[1];
    if (!method_exists($controller, $method)) {
      return false;
    }
    return $method;
  }
}
