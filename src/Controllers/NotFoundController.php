<?php

namespace Controllers;

class NotFoundController extends Controller
{
  public function index()
  {
    $data = [
      'title' => '404 - Not found',
      'view' => 'notFound'
    ];

    $this->view($data);
  }
}
