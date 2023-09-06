<?php

namespace Routes;

use Controllers;

class RouterUri
{

  static private function isHomeWithoutUri()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $explodedUri = explode('/', ltrim($uri, '/'));
    return $explodedUri[0] !== 'home' && ($explodedUri[0] === '' || method_exists(Controllers\HomeController::class, $explodedUri[0]));
  }

  static public function getUri()
  {
    $subtractFromIndex = self::isHomeWithoutUri() ? 1 : 0; //lembrar de subtrair com -
    $uri = $_SERVER['REQUEST_URI'];
    $explodedUri = explode('/', ltrim($uri, '/'));
    return [
      $subtractFromIndex ? 'home' : $explodedUri[0],
      ($explodedUri[1 - $subtractFromIndex] ?? '') ? $explodedUri[1 - $subtractFromIndex] : 'index',
      $explodedUri[2 - $subtractFromIndex] ?? ''
    ];
  }
}
