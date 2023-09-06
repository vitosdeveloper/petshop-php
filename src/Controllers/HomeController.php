<?php

namespace Controllers;

class HomeController extends Controller
{
  public function index($param)
  {
    $data = [
      'view' => 'home',
      'title' => 'Home',
      'param' => $param
    ];

    $this->view($data);
  }
}
