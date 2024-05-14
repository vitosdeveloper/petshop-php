<?php

namespace Controllers;

class ServicosController
{
  public static function index()
  {
    $data = new ControllerData('servicos', 'Serviços');

    Controller::view($data);
  }
}
