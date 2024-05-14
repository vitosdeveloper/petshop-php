<?php

namespace Controllers;

class NotFoundController
{
  public static function index()
  {
    $data = new ControllerData(
      'notFound',
      '404 - Not found'
    );

    Controller::view($data);
  }
}
