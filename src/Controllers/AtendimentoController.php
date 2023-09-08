<?php

namespace Controllers;

class AtendimentoController extends Controller
{
  public function show($today)
  {
    $data = [
      'title' => 'Atendimento - DogCat Banho e Tosa',
      'view' => 'atendimento'
    ];

    $this->view($data);
  }
}
