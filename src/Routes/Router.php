<?php

namespace Routes;

use Controllers;

class Router
{
  public static function init()
  {
    $routes = [
      'home' => Controllers\HomeController::class,
      'notFound' => Controllers\NotFoundController::class,
      'atendimento' => Controllers\AtendimentoController::class,
      'servicos' => Controllers\ServicosController::class,
      'historico' => Controllers\HistoricoController::class,
    ];
    $uriArr = RouterUri::getUri();

    $controller = RouterController::getController($uriArr, $routes);
    $method = RouterMethod::getMethod($routes, $controller, $uriArr);
    $params = $uriArr[2];

    if (!$method) {
      $method = 'index';
      $controller = 'notFound';
    }

    $routes[$controller]::$method($params);
  }
}
