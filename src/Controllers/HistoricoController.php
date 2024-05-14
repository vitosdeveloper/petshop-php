<?php

namespace Controllers;

class HistoricoController
{
  public static function index()
  {
    $data = new ControllerData(
      'historico',
      'Histórico'
    );

    Controller::view($data);
  }
}
