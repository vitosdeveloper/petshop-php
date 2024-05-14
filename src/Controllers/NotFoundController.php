<?php

namespace Controllers;

class NotFoundController
{
  public static function index(IController $Controller)
  {
    $data = new ControllerData(
      'notFound',
      '404 - Not found'
    );

    $Controller::view($data);
  }
}
