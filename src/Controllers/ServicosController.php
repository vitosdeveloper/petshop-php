<?php

namespace Controllers;

class ServicosController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Serviços',
      'view' => 'servicos'
    ];

    $this->view($data);
  }
}
