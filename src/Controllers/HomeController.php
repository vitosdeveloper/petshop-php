<?php

namespace Controllers;

use helpers\SlugHelper;

class HomeController extends Controller
{
  public function index()
  {
    $data = [
      'view' => 'home',
      'title' => 'Home - DogCat Banho e Tosa',
      'today' => SlugHelper::dateToSlug()
    ];

    $this->view($data);
  }
}
