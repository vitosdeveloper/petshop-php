<?php

namespace Routes;

class RouterController
{
  static public function getController(array $uriArr, array $routes): string
  {
    $controller = $uriArr[0];
    if (!array_key_exists($controller, $routes)) {
      return $controller = 'notFound';
    }
    return $controller;
  }
}
