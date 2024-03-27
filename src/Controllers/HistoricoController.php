<?php

namespace Controllers;

class HistoricoController extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Histórico',
      'view' => 'historico'
    ];

    $this->view($data);
  }
}
