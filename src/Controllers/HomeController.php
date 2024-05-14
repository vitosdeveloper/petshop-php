<?php

namespace Controllers;

use helpers\SlugHelper;

class HomeController
{
  public static function index()
  {
    $data = new ControllerData(
      'home',
      'Home - DogCat Banho e Tosa',
      ['today' => SlugHelper::dateToSlug()]
    );

    Controller::view($data);
  }
}
