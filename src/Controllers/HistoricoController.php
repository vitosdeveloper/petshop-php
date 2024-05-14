<?php

namespace Controllers;

class HistoricoController
{
  public static function index(IController $Controller)
  {
    $data = new ControllerData(
      'historico',
      'Histórico'
    );

    $Controller::view($data);
  }
}
