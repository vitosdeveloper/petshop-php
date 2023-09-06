<?php

namespace Controllers;

class HomeController extends Controller
{
  public function index()
  {
    $data = [
      'view' => 'home',
      'title' => 'Home'
    ];

    $this->view($data);
  }
}
