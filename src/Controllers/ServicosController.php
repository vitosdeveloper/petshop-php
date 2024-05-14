<?php

namespace Controllers;

class ServicosController
{
  public static function index(IController $Controller)
  {
    $data = new ControllerData('servicos', 'Serviços');

    $Controller::view($data);
  }
}
