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
  public function store($param)
  {
    $data = [
      'view' => 'store',
      'title' => 'store',
      'param' => $param
    ];

    $this->view($data);
  }
}
